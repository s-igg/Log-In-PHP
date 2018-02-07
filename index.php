<?php
$title = 'Welcome';
$bodyClass = "d-flex justify-content-center align-items-center";
include 'includes/header.php';


$query = "SELECT ID FROM appdb";
$result = mysqli_query($connection, $query);
$num = mysqli_num_rows($result);
?>

<!-- Background Video -->
<video autoplay muted loop>
  <source src="video/car.mp4" type="video/mp4">
</video>
<!-- Background Video End -->

<!-- Main content -->
<main class="col-12 col-sm-8 col-lg-4 main text-center">
  <img class="img" src="img/LOGOforApp.svg" alt="App">
  <p>Over <span><?php echo $num ?></span> users</p>
  <a  href="login.php" class="A btn btn-outline-light">Log In</a>
  <a  href="register.php" class="A btn btn-outline-light">Register</a>
</main>


<?php   include 'includes/footer.php';?>
