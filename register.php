<?php
  $bodyClass = "d-flex justify-content-center align-items-center";
  $title= "Register";
  include 'includes/header.php';

  session_start();

  if (isset($_POST['register'])) {
     registerUser();
     $taken = registerUser();
  }
 ?>

<form class="col-12 col-sm-8 col-lg-4 usersForm" action="register.php" method="post">
  <img class="img" src="img/LOGOforApp.svg" alt="App">
  <div class="form-group">
    <input type="text" name="username" class="form-control" placeholder="Username">
  </div>
  <div class="form-group">
    <input type="password" name="password" class="form-control" placeholder="Password">
  </div>
  <button type="submit" name="register" class="col-12 btn btn-primary">Register</button>
  <?php if(isset($taken)): ?>
    <div class="alert alert-danger animated flash"><?php echo $taken; ?></div>
  <?php endif; ?>
</form>


<?php   include 'includes/footer.php';?>
