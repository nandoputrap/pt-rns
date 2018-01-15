<?php include_once "view/header.php" ?>


<div class="container-fluid bg-administrasi">
  <div class="container">
    <div class="content-administrasi">
      <div class="title-administrasi">
        <h1 class="text-center">Lupa Password</h1>
      </div>
      <div class="login-administrasi">

        <img src="assets/img/rns.png" alt="RNS">

        <form>
          <div class="input-group input-administrasi">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="email" type="text" class="form-control" name="email" placeholder="ID Karyawan...">
          </div>
          <div class="form-group">
            <select class="form-control">
              <option>Dept. Code...</option>
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
