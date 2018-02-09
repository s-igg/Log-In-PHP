<?php
  include 'includes/header.php';

    $taskName = $_REQUEST['taskName'];
    $taskID = $_REQUEST['taskID'];
    $title = "Ändra " . $taskName . "?";

    if (isset($_POST['changeTask'])) {
        editTask();
    }
   ?>
   <form action="edit.php" method="post">
     <input type="hidden" name="taskID" value="<?php echo $taskID; ?>">
     <h2>fghjkl</h2>
     <input type="text" name="newTask" placeholder="New Task Text" value="<?php echo $taskName; ?>">
     <input type="submit" name="changeTask" value="Ändra">
     <a href="admin.php">No</a>
   </form>
</body>
</html>
