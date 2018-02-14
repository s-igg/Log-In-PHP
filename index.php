<?php
$title = 'Welcome';
$bodyClass = "d-flex justify-content-center align-items-center";
include 'includes/header.php';

?>

<!-- Background Video -->
<video class="video" autoplay muted loop>
  <source src="video/edited_1.mp4" type="video/mp4">
    Din webbläsare har int stöd för HTML5 video.
</video>
<!-- Background Video End -->

<!-- Main content -->
<main class="col-12 col-sm-8 col-lg-4 main text-center">
  <img class="img" src="img/LOGOforApp.svg" alt="App">
  <p>Over <span><?php echo  countUsers() ?></span> users</p>
  <a  href="login.php" class="A btn btn-outline-light">Log In</a>
  <a  href="register.php" class="A btn btn-outline-light">Register</a>
</main>


<?php   include 'includes/footer.php';?>
