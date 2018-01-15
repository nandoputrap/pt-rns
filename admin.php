<?php include_once "view/header.php" ?>

<div class="container-fluid bg-admin">
  <div class="container">
    <div class="content-admin">

      <h1 class="text-center">Halaman Admin</h1>

      <div class="col-md-4">
        <div class="box-admin" id="box-admin-1">
          <center><i class="fa fa-admin fa-group text-center"></i></center>
          <a href="admin-data-karyawan.php"><h2 class="text-center">Data Karyawan</h2></a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="box-admin" id="box-admin-2">
          <center><i class="fa fa-admin fa-dollar text-center"></i></center>
          <a href="admin-gaji-karyawan.php"><h2 class="text-center">Gaji Karyawan</h2></a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="box-admin" id="box-admin-3">
          <center><i class="fa fa-admin fa-folder-open-o text-center"></i></center>
          <a href="admin-arsip-gaji.php"><h2 class="text-center">Arsip Gaji</h2></a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once "view/footer.php" ?>
