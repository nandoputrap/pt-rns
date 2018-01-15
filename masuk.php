<?php include_once "view/header.php" ?>


<div class="container-fluid bg-administrasi">
  <div class="container">
    <div class="content-administrasi">
      <div class="title-administrasi">
        <h1 class="text-center">Masuk</h1>
      </div>
      <div class="login-administrasi">

        <img src="assets/img/rns.png" alt="RNS">

        <form>
          <div class="input-group input-administrasi">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="email" type="text" class="form-control" name="email" placeholder="Nama Pengguna...">
          </div>
          <div class="input-group input-administrasi">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="password" type="password" class="form-control" name="password" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-success btn-rns">Submit</button>
        </form>
        <p class="text-center"><a href="lupapassword.php">Lupa Password?</a></p>
      </div>
    </div>
  </div>
</div>


<?php include_once "view/footer.php" ?>
