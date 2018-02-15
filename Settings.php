<?php
  $title= "Settings";
  session_start();
  include 'includes/header.php';
  include 'includes/nav.php';

  if (isset($_POST['saveProfilePic'])) {
    $profilepic = $_FILES['ProfilePic']['name'];
    $profilepic_temp = $_FILES['ProfilePic']['tmp_name'];
    move_uploaded_file($profilepic_temp, "img/profile-img/$profilepic");
  }
?>


<div class="container-fluid">
  <div class="row justify-content-center align-items-center">

    <form class="col-12 col-sm-8 col-lg-4 usersForm UglySolutFixlater" action="Settings.php" method="post" enctype="multipart/form-data">
      <div class="custom-file">
          <input type="file" name="ProfilePic" class="custom-file-input" id="validatedCustomFile" required>
          <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
          <div class="invalid-feedback">Somthing went wrong</div>
        </div>
        <button type="submit" name="saveProfilePic" class="col-12 btn btn-primary">Save</button>
    </form>

  </div>
  </div>


<?php include 'includes/footer.php'; ?>
