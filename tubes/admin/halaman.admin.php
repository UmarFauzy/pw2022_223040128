<?php 
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
} ?>
<?php require('partials/header.php') ?>
<?php require('partials/nav.php') ?>
  <div class="content">
    <div class="row">
      <div class="col-md-3">
        <div class="card text-bg-primary mb-3" style="max: width 18rem;">
            <div class="card-header">admin</div>
            <div class="card-body">
              <h5 class="card-title">Primary Card Title</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum suscipit itaque voluptate, repudiandae inventore maiores accusamus omnis quas quam. Maiores dolore amet commodi veritatis nam facilis cupiditate, necessitatibus vero iste.</p>
              <div class="card-footer">Header</div>
            </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-bg-primary mb-3" style="max: width 18rem;">
            <div class="card-header">Gambar</div>
            <div class="card-body">
              <h5 class="card-title">Untuk Merubah Gambar Gambar</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum suscipit itaque voluptate, repudiandae inventore maiores accusamus omnis quas quam. Maiores dolore amet commodi veritatis nam facilis cupiditate, necessitatibus vero iste.</p>
              <div class="card-footer">Gambar</div>
            </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-bg-primary mb-3" style="max: width 18rem;">
            <div class="card-header">Berita</div>
            <div class="card-body">
              <h5 class="card-title">Untuk Menambah Berita pada halaman user</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum suscipit itaque voluptate, repudiandae inventore maiores accusamus omnis quas quam. Maiores dolore amet commodi veritatis nam facilis cupiditate, necessitatibus vero iste.</p>
              <div class="card-footer">Berita</div>
            </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-bg-primary mb-3" style="max: width 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
              <h5 class="card-title">Primary Card Title</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum suscipit itaque voluptate, repudiandae inventore maiores accusamus omnis quas quam. Maiores dolore amet commodi veritatis nam facilis cupiditate, necessitatibus vero iste.</p>
              <div class="card-footer">Header</div>
            </div>
        </div>
      </div>
    </div>
  </div>
<?php require('partials/footer.php') ?>