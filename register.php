<?php
  $bodyClass = "d-flex";
  $title= "Register";
  include 'includes/header.php';

  session_start();

  if (isset($_POST['register'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $hashFormat = "$2y$10$";
    $salt = "jagtestarmed22teckennu";

    $hashAndSalt = $hashFormat . $salt;
    $pass = crypt($pass, $hashAndSalt);

    if (userIsExist($user)) {
      $taken = "Username is Taken!";
    }
    else {
      $user = mysqli_real_escape_string($connection, $user);
      $pass = mysqli_real_escape_string($connection, $pass);

      $query = "INSERT INTO appdb(Username, Password) "; // <- Vart vi lägger in info
      $query .= "VALUES ('$user', '$pass')"; // <- Vad vi lägger in

      $result = mysqli_query($connection, $query);

      if (!$result) {
        die("Query failed") . mysqli_error($connection);
      }
      header("Location: login.php");
    }
  }
 ?>
 <div  id="login">

  <form class="animated bounceIn" action="register.php" method="post">
    <input class="Text" type="text" name="username" placeholder="Username" required>
    <input class="Pass" type="password" name="password" placeholder="Password" required>
    <input class="Submit" type="submit" name="register" value="Register">
  </form>
  <?php if(isset($taken)): ?>
  <div id="alert" class="animated flash"><?php echo $taken; ?></div>
  <?php endif; ?>
</div>
</body>
</html>
