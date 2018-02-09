<?php
  $bodyClass = "d-flex justify-content-center align-items-center";
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
      header("Location: admin.php");
    }
    else {
      $errorMessage= "Wrong Username / Password!";
    }
  }
 ?>

<form class="col-12 col-sm-8 col-lg-4" action="login.php" method="post">
  <h3><?php echo $title; ?></h3>
  <div class="form-group">
    <input type="text" name="username" class="form-control" placeholder="Username">
  </div>
  <div class="form-group">
    <input type="password" name="password" class="form-control" placeholder="Password">
  </div>
  <button type="submit" name="login" class="col-12   btn btn-primary">Log in</button>
  <a href="register.php" class="col-12 regist">Register here</a>
</form>

<?php if($errorMessage): ?>
<div id="alert" class="animated flash"></?php echo $errorMessage; ?></div>
<?php endif; ?>

<?php   include 'includes/footer.php';?>
</body>
</html>
