<?php
$title = "Welcome";
  include 'includes/header.php';
  session_start();
/*  if (!$_SESSION['LogIn']) {
    header("Location: login.php");
  }*/
?>
<?php if ($_SESSION['Username']) : ?>
  <h1>┬┴┬┴┤ ͜ʖ ͡°) ├┬┴┬┴ <?php echo $_SESSION['Username']; ?></h1>
  <a href="LogOut.php">Log Out</a>
<?php else : ?>
  <h1>Hi!</h1>
<?php endif; ?>
</body>
</html>
