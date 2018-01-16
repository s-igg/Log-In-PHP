<?php
$title = "Welcome";
  include 'includes/header.php';
  session_start();
  if (!$_SESSION['LogIn']) {
    header("Location: login.php");
  }
?>
<h1>┬┴┬┴┤ ͜ʖ ͡°) ├┬┴┬┴ <?php echo $_SESSION['Username']; ?></h1>
</body>
</html>
