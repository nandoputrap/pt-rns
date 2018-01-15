<?php include_once "view/header.php" ?>

<div class="container-fluid bg-administrasi-gaji-karyawan">
  <div class="container">
    <div class="content-administrasi-gaji-karyawan">

      <h1 class="text-center">Administrasi - Gaji Karyawan</h1>

      <div class="panels-administrasi-gaji-karyawan">
        <div class="col-lg-12">

          <div class="panel panel-default panel-identitas-karyawan">
            <div class="panel-heading">Identitas Karyawan</div>
            <div class="panel-body">
              <ul>
                <li><p>ID Karyawan :</p></li>
                <li><p>Nama Karyawan :</p></li>
                <li><p>Kode Bagian :</p></li>
              </ul>
            </div>
          </div>


          <div class="col-md-6">
            <div class="panel panel-default panel-karyawan-2">
              <div class="panel-heading">Pendapatan Pokok</div>
              <div class="panel-body">
                <ul>
                  <li><p>Pendapatan Pokok :</p></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="panel panel-default panel-karyawan-2">
              <div class="panel-heading">Pendapatan Lain-lain</div>
              <div class="panel-body">
                <ul>
                  <li><p>Upah Lembur :</p></li>
                  <li><p>Refund Absen :</p></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="panel panel-default panel-karyawan-2">
              <div class="panel-heading panel-heading-total-pendapatan">Total Pendapatan Karyawan :</div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">Pendapatan Lain-lain</div>
              <div class="panel-body">
                <ul>
                  <li><p>PPH 21 :</p></li>
                  <li><p>Kesehatan :</p></li>
                  <li><p>Ketenagakerjaan :</p></li>
                  <li><p>Absen :</p></li>
                  <li><p>Kasbon :</p></li>
                  <li><p>Pinjaman :</p></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="panel panel-default panel-karyawan-2">
              <div class="panel-heading panel-heading-total-pendapatan">Total Potongan Karyawan :</div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="panel panel-default panel-karyawan-2">
              <div class="panel-heading panel-heading-total-pendapatan">Total Gaji Diterima :</div>
            </div>
          </div>

          <button type="submit" class="btn btn-success btn-cetak">Cetak</button>

        </div>


      </div>

    </div>
  </div>
</div>

<?php include_once "view/footer.php" ?>
