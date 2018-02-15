<?php

  // appName
  function appName(){
    return   "App ";
  }

  function countUsers(){
    global $connection;
    $query = "SELECT ID FROM appdb";
    $result = mysqli_query($connection, $query);
    return $num = mysqli_num_rows($result);
  }

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

  function loginUser(){
    global $connection;

    $db_user = '';
    $db_pass = '';

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $user = mysqli_real_escape_string($connection, $user);
    $pass = mysqli_real_escape_string($connection, $pass);

    $query = "SELECT * FROM appdb WHERE Username = '{$user}' ";
    $select_user_query = mysqli_query($connection, $query);

    if (!$select_user_query) {
      die('Query Failed') . mysqli_error($connection);
    }
    while ($row = mysqli_fetch_array($select_user_query)) {
       $db_id = $row['ID'];
       $db_user = $row['Username'];
       $db_pass = $row['Password'];
       $db_profilepic = $row['ProfilePic'];
    }

    $pass = crypt($pass, $db_pass);

    if ($user === $db_user && $pass === $db_pass) {
      $_SESSION['ID'] = $db_id;
      $_SESSION['Username'] = $db_user;
      $_SESSION['ProfilePic'] = $db_profilepic;
      header("Location: admin.php");
    }
    else {
      return $errorMessage = "Wrong Username / Password!";
    }
  }

  function registerUser(){
    global $connection;

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $hashFormat = "$2y$10$";
    $salt = "jagtestarmed22teckennu";

    $hashAndSalt = $hashFormat . $salt;
    $pass = crypt($pass, $hashAndSalt);

    if (userIsExist($user)) {
    return $taken = "Username is Taken!";
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
