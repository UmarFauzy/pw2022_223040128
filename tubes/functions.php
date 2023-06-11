<?php
//Koneksi Ke Database



  $conn = mysqli_connect('localhost', 'root', '', 'tubes') or die('KONEKSI GAGAL!');


function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data) {
  global $conn;
  $nama_kategori =htmlspecialchars ($data['nama_kategori']);

  $query = "INSERT INTO
             kategori
            VALUES
            (null, '$nama_kategori')";

mysqli_query($conn, $query) or die (mysqli_error($conn));

return mysqli_affected_rows($conn);

}

function ubah_category($data)
{
	global $conn;

	$id_kategori = $data["id_kategori"];
	$nama_kategori = $data["nama_kategori"];


	$query = "UPDATE kategori SET
				id_kategori = '$id_kategori', 
				nama_kategori = '$nama_kategori'
			WHERE id_kategori = $id_kategori
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus_category($id_kategori)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM kategori WHERE id_kategori = '$id_kategori'");
	return mysqli_affected_rows($conn);
}

function cari_kategori($keyword)
{
	$query = "SELECT * FROM kategori
				WHERE
			  id_kategori LIKE '%$keyword%' OR
			  nama_kategori LIKE '%$keyword%' 
			";
	return query($query);
}


function tambah_berita($data)
{

  global $conn;

	$id_kategori = htmlspecialchars($data["id_kategori"]);
	$judul_berita = htmlspecialchars($data["judul_berita"]);
	$gambar = upload_berita();
	if (!$gambar){
		return false;
	}
	

	$query = "INSERT INTO product (id_product, id_kategori, judul_berita, gambar)
            SELECT NULL, kategori.id_kategori, '$judul_berita', '$gambar'
            FROM kategori
            WHERE kategori.id_kategori = '$id_kategori'";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function upload_berita()
{
	$nameFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	if ($error === 4){
		echo"<script>
		alert('masukan foto terlebih dahulu'); 
		</script>";
		return false;
	}


	$ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'webp'];
	$ekstensiGambar = explode ('.', $nameFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo"<script>
		alert('yang anda uplod bukan gambar '); 
		</script>";
		return false;
	}

	if ($ukuranFile > 10000000){
		echo"<script>
		alert('ukuran gambar terlalu besar '); 
		</script>";
		return false;
	}


	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;


	// memindahkan file
	move_uploaded_file ($tmpName, '../img/' . $namaFileBaru);
	return $namaFileBaru;


}

function hapus_berita($id_product)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM product WHERE id_product = '$id_product'");
	return mysqli_affected_rows($conn);
}

function ubah_berita($data)
{
	global $conn;

	$id_product = htmlspecialchars($data["id_product"]);
  $judul_berita = htmlspecialchars($data["judul_berita"]);
	$gambar_lama = htmlspecialchars($data["gambar_lama"]);
	if ($_FILES ['gambar']['error'] === 4 ) {
		$gambar = $gambar_lama;
	} else{
		$gambar = upload_berita();
	}
  $id_kategori = htmlspecialchars($data["id_kategori"]);

	$query = "UPDATE product SET
				id_product = '$id_product', 
				judul_berita = '$judul_berita', 
				gambar = '$gambar',
				id_kategori = '$id_kategori'
			WHERE id_product = $id_product
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
function cari_berita($keyword)
{
	$query = "SELECT * FROM product
				INNER JOIN kategori
			ON product.id_kategori = kategori.id_kategori
				WHERE
			  id_product LIKE '%$keyword%' OR
			  product.id_kategori LIKE '%$keyword%' OR
			  judul_berita LIKE '%$keyword%' OR
			  gambar LIKE '%$keyword%'
			";
	return query($query);
}

function registrasi($data)
{
	global $conn;

	$username = strtolower(stripcslashes($data["username"]));
	$email = $data["email"];
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM admin WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('username sudah terdaftar!')
			  </script>";
		return false;
	}

	// cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
				alert('konfirmasi password tidak sesuai')
			  </script>";
		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO `admin` (`id`, `username`, `email`, `password`)
	VALUES(null, '$username', '$email', '$password')");

	return mysqli_affected_rows($conn);
}

function ubah_admin($data)
{
	global $conn;

	$id = $data["id"];
	$username = strtolower(stripcslashes($data["username"]));
	$email = $data["email"];
	$password = mysqli_real_escape_string($conn, $data["password"]);

	$password = password_hash($password, PASSWORD_DEFAULT);


	$query = "UPDATE admin SET
				id = '$id', 
				username = '$username',
				email = '$email',
				`password` = '$password'
			WHERE id = $id
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus_admin($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM admin WHERE id = '$id'");
	return mysqli_affected_rows($conn);
}

function cari_admin($keyword)
{
	$query = "SELECT * FROM admin
				WHERE
			  id LIKE '%$keyword%' OR
			  username LIKE '%$keyword%' OR
			  email LIKE '%$keyword%'
			";
	return query($query);
}