<?php
  $appName = "App";

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
  function removeTask(){
    global $connection;
    $taskID = $_POST['taskID'];
    $query = "DELETE FROM tasks WHERE id = $taskID";
    $deleteTaskQuery = mysqli_query($connection, $query);
    header("Location: admin.php");
  }
  function editTask(){
    global $connection;
    $taskID = $_POST['taskID'];
    $newText = $_POST['newTask'];
    $query = "UPDATE tasks SET title='$newText' WHERE id = '$taskID'";
    $updateTaskQuery = mysqli_query($connection, $query);
    header("location: admin.php");
  }

  function IFs(){
    global $title;
    $lastLetter = substr($_SESSION['Username'], -1);

    if (substr($lastLetter, -1) == 's' || substr($lastLetter, -1) == 'S') {
      $title = $_SESSION['Username'];
    }
    else {
      $title= $_SESSION['Username'] . "s" . " Tasks";
    }
  }
 ?>
