$(document).ready(function(){

    //tombol cari 
    $('#cari').hide();
    // ketika keywoard di tulis
    $('#keyword').on('keyup', function(){
        $('#container').load('../ajax/admin.php?keyword=' + $('#keyword').val());
    });


    $('#keyword_berita').on('keyup', function(){
        $('#container').load('../ajax/berita.php?keyword=' + $('#keyword_berita').val());
    });

    $('#keyword_kategori').on('keyup', function(){
        $('#container').load('../ajax/category.php?keyword=' + $('#keyword_kategori').val());
    });


});