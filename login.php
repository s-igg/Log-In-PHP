<?php
  $bodyClass = "d-flex justify-content-center align-items-center";
  $title= "Log In";

  include 'includes/header.php';


  $errorMessage='';

  session_start();

  if (isset($_POST['login'])) {
    loginUser();
    $errorMessage = loginUser();
  }
 ?>

<form class="col-12 col-sm-8 col-lg-4 usersForm" action="login.php" method="post">
  <img class="img" src="img/LOGOforApp.svg" alt="App">
  <div class="form-group">
    <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
  </div>
  <div class="form-group">
    <input type="password" name="password" class="form-control" placeholder="Password">
  </div>
  <button type="submit" name="login" class="col-12  btn btn-primary">Log in</button>
  <a href="register.php" class="form-text text-center">Register here</a>
  <?php if($errorMessage): ?>
    <div class="alert alert alert-danger animated flash"><?php echo $errorMessage; ?></div>
  <?php endif; ?>
</form>


<?php   include 'includes/footer.php';?>
