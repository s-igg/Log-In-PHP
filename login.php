<?php
include 'includes/DB.php';

  session_start();

  if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $user = mysqli_real_escape_string($connection, $user);
    $pass = mysqli_real_escape_string($connection, $pass);

    $query = "SELECT * FROM appdb WHERE Username = '{$user}' ";
    $select_user_query = mysqli_query($connection, $query);

    if (!$select_user_query) {
      die('Query Failed') . mysqli_error($connection);
    }
    while ($row = mysqli_fetch_array($select_user_query)) {
       $db_id = $row['ID'];
       $db_user = $row['Username'];
       $db_pass = $row['Password'];
    }
    if ($user === $db_user && $pass === $db_pass) {
      $_SESSION['LogIn'] = true;
      $_SESSION['Username'] = $db_user;
      header("Location: index2.php");
      echo "<div class='notice'>You are in!</div>";
    }
    else {

      $_SESSION['LogIn'] = false;
      header("Location: login.php");
      echo "<div class='notice'>Wrong Username/Password ¯\_(ツ)_/¯</div>";
    }
  }
  $title= "Log In";
  include 'includes/header.php';
 ?>

  <form class="animated bounceIn" action="login.php" method="post">
    <input class="Text" type="text" name="username" placeholder="Username" required>
    <input class="Pass" type="password" name="password" placeholder="Password" required>
    <input class="Submit" type="submit" name="login" value="Log In">
  </form>
</body>
</html>