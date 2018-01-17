<?php
include 'includes/DB.php';

  session_start();

  if (isset($_POST['register'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $hashFormat = "$2y$10$";
    $salt = "jagtestarmed22teckennu";

    $hashAndSalt = $hashFormat . $salt;
    $pass = crypt($pass, $hashAndSalt);

    $user = mysqli_real_escape_string($connection, $user);
    $pass = mysqli_real_escape_string($connection, $pass);

    $query = "INSERT INTO appdb(Username, Password) "; // <- Vart vi lägger in info
    $query .= "VALUES ('$user', '$pass')"; // <- Vad vi lägger in

    $result = mysqli_query($connection, $query);

    if (!$result) {
      die("Query failed") . mysqli_error($connection);
    }
  }
  $title= "Log In";
  include 'includes/header.php';
 ?>

  <form class="animated bounceIn" action="register.php" method="post">
    <input class="Text" type="text" name="username" placeholder="Username" required>
    <input class="Pass" type="password" name="password" placeholder="Password" required>
    <input class="Submit" type="submit" name="register" value="Register">
  </form>
</body>
</html>
