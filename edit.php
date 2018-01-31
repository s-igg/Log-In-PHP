<?php
  session_start();

  $taskName = $_REQUEST['taskName'];
  $taskID = $_REQUEST['taskID'];
    $Whateva = "Ändra " . $taskName . "?";
    include 'includes/header.php';

    if (isset($_POST['changeTask'])) {
      if (isset($_SESSION['username'])){
        editTask();
      }
    }
   ?>
   <form action="edit.php" method="post">
     <input type="hidden" name="taskID" value="<?php echo $taskID; ?>">
     <h2>fghjkl</h2>
     <input type="text" name="newTask" placeholder="New Task Text" value="<?php echo $taskName; ?>">
     <input type="submit" name="changeTask" value="Ändra">
     <a href="index.php">No</a>
   </form>
</body>
</html>
