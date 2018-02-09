<?php
  $bodyClass = "d-flex justify-content-center align-items-center";
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

</div>


<form class="col-12 col-sm-8 col-lg-4" action="register.php" method="post">
  <h3><?php echo $title; ?></h3>
  <div class="form-group">
    <input type="text" name="username" class="form-control" placeholder="Username">
  </div>
  <div class="form-group">
    <input type="password" name="password" class="form-control" placeholder="Password">
  </div>
  <button type="submit" name="register" class="col-12 btn btn-primary">Register</button>
</form>


<?php if(isset($taken)): ?>
  <div id="alert" class="animated flash"><?php echo $taken; ?></div>
<?php endif; ?>
<?php   include 'includes/footer.php';?>
</body>
</html>
