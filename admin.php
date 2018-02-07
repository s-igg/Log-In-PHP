<?php
  session_start();
  include 'includes/header.php';


  if (isset($_POST['addTasks'])) {
    addTasks();
  }
?>
<?php if (isset($_SESSION['Username'])) : ?>

<?php include "includes/nav.php"; ?>

<div class="container-fluid">
  <div class="row justify-content-center">
    <?php include "includes/task.php"; ?>
  </div>
</div>

<?php else : ?>
<div class="alert alert-warning">You have no acces to this page</div>
<?php endif; ?>
<?php   include 'includes/footer.php'; ?>
