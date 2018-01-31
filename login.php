<?php
  $bodyClass = "d-flex";  
  $title= "Log In";
  include 'includes/header.php';
  $db_user = '';
  $db_pass = '';
  $errorMessage='';
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

    $pass = crypt($pass, $db_pass);

    if ($user === $db_user && $pass === $db_pass) {
      $_SESSION['ID'] = $db_id;
      $_SESSION['Username'] = $db_user;
      header("Location: index.php");
    }
    else {
      $errorMessage= "Wrong Username / Password!";
    }
  }
 ?>
<div  id="login">
  <div class="img animated pulse">
    <img src="LOGOforApp.svg" alt="">
  <form class="animated pulse" action="login.php" method="post">
    <input class="Text" type="text" name="username" placeholder="Username" required>
    <input class="Pass" type="password" name="password" placeholder="Password" required>
    <input class="Submit" type="submit" name="login" value="Log In">
    <a href="register.php" class="regist">Register here</a>
  </form>
  <?php if($errorMessage): ?>
  <div id="alert" class="animated flash"><?php echo $errorMessage; ?></div>
  <?php endif; ?>
</div>
</div>

</body>
</html>
