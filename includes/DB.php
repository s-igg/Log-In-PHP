<?php
$connection = mysqli_connect('localhost' , 'root' , 'root' , 'apdb');

  if (!$connection) {
    die('Connection failed!' . mysqli_error($connection));
  }
 ?>
