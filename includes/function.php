<?php
  function userIsExist($user){
    global $connection;

    $query = "SELECT * FROM appdb WHERE Username = '$user' ";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
      return true;
    }
    else {
      return false;
    }
  }

  function addTasks(){
    global $connection;

    if (isset($_POST['taskName'])) {
      echo $taskName = $_POST['taskName'];

      echo $userID = $_SESSION['ID'];
    }
  }
 ?>
