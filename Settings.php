<?php
  $title= "Settings";
  session_start();
  include 'includes/header.php';
  include 'includes/nav.php';
?>


<div class="container-fluid">
  <div class="row justify-content-center align-items-center">
    <form class="col-12 col-sm-8 col-lg-4 usersForm UglySolutFixlater" action="Settings.php" method="post">
    <div class="form-group">
      <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
    </div>
    <button type="submit" name="login" class="col-12  btn btn-primary">Save</button>
      <?php if(isset($taken)): ?>
        <div class="alert alert-danger animated flash"><?php echo $taken; ?></div>
      <?php endif; ?>
    </form>
  </div>
</div>



<?php include 'includes/footer.php'; ?>
