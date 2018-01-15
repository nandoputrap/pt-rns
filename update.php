<?php include_once "view/header.php" ?>


<div class="container-fluid bg-update">
  <div class="container">
    <div class="content-update">
      <div class="title-update">
        <h1 class="text-center">Update Data Karyawan</h1>
        <hr class="hr-update">
      </div>
      <div class="form-update">
        <form>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="email" type="text" class="form-control" name="email" placeholder="Nama Pengguna...">
          </div><br>

          <div class="form-group">
            <select class="form-control" id="sel1">
              <option>Dept. Code...</option>
              <option>Dummy</option>
              <option>Dummy</option>
              <option>Dummy</option>
            </select>
          </div>

          <div class="form-group">
            <textarea class="form-control" rows="5" id="comment" placeholder="Alamat..."></textarea>
          </div>

          <div class="form-group">
            <label for=""><p>Jenis Kelamin :&nbsp; &nbsp;</p></label>
            <label class="radio-inline"><input type="radio" name="optradio">Laki-laki</label>
            <label class="radio-inline"><input type="radio" name="optradio">Perempuan</label>
          </div>

          <div class="form-group">
            <select class="form-control">
              <option>Status...</option>
              <option>Dummy</option>
              <option>Dummy</option>
              <option>Dummy</option>
            </select>
          </div>

          <div class="form-group">
            <select class="form-control">
              <option>Tanggungan...</option>
              <option>Dummy</option>
              <option>Dummy</option>
              <option>Dummy</option>
            </select>
          </div>

          <button type="submit" class="btn btn-success btn-rns">Submit</button>
        </form>

      </div>
    </div>
  </div>
</div>


<?php include_once "view/footer.php" ?>
