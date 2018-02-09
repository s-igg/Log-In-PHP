<?php

$AreUsure = "U sure?";
include 'includes/header.php';

if (!empty($_GET['taskID'])) {
  $taskID = $_REQUEST['taskID'];
}
if (!empty($_POST)) {

    removeTask();

}
 ?>
 <form class="later" action="delete.php" method="post">
   <input type="hidden" name="taskID" value="<? echo $taskID; ?>">
   <h2>Are You Sure?</h2>
   <input type="submit" name="deleteTask" value="Yes!">
   <a href="admin.php">No!</a>
 </form>
</body>
</html>
