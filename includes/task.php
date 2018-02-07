<section id="task" class="col-12 col-sm-8 col-lg-4">
  <h1 class="to-do">Thing needs to do</h1>
  <ul class="list-unstyled">
    <?php
    $query = "SELECT * FROM tasks WHERE User_ID = {$_SESSION['ID']}" ;
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_array($result)) :
    ?>

  <li>
  <?php echo $row['Title']; ?>
    <a  href="delete.php?taskID=<?php echo $row['ID']; ?>" class="fa fa-trash" aria-hidden="true"></a>
    <a  href="edit.php?taskID=<?php echo $row['ID']; ?>&taskName=<?php echo $row['Title']; ?>" class="fa fa-pencil-square-o" aria-hidden="true"></a>
  </li>

  <?php endwhile; ?>
  </ul>
  <form action="admin.php" method="post" class="form-inline my-2 my-lg-2 justify-content-center">
    <input class="form-control mr-sm-2" type="text" name="taskName">
    <input class="btn btn-outline-success my-2 my-sm-0" type="submit" name="addTasks" value="Add">
  </form>
</section>
