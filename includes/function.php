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
      $title = $_POST['taskName'];
      $userID = $_SESSION['ID'];

      $query = "INSERT INTO tasks(Title, User_ID)";
      $query .="VALUES('$title', '$userID') ";

      $addTaskQuery = mysqli_query($connection, $query);
    }
    else {
      echo "hi";
    }
  }
 ?>
