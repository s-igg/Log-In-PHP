<?php
$title = "Welcome";
  include 'includes/header.php';
  session_start();
/*  if (!$_SESSION['LogIn']) {
    header("Location: login.php");
  }*/
  if (isset($_POST['addTasks'])) {
    addTasks();
  }
?>
<?php if (isset($_SESSION['Username'])) : ?>
<nav>
  <ul class="menu">
    <i class="fa fa-tasks" aria-hidden="true"></i>
    <h1 class="page-name">App</h1>
    <a href="#"><li class="lil">Hello1</li></a>
    <a href="#"><li class="lil">Hello2</li></a>
    <a href="#"><li class="lil">Hello3</li></a>
    <a href="LogOut.php"><li class="logout lil">Log Out <?php echo $_SESSION['Username']; ?></li></a>
  </ul>
</nav>




<section>
  <h1 class="to-do">Thing needs to do</h1>
  <ul>
    <li class="list">test1</li>
    <li class="list">test2</li>
    <li class="list">test3</li>
  </ul>
  <form action="index.php" method="post">
    <input class="Taskname" type="text" name="taskName">
    <input class="Addtask" type="submit" name="addTasks" value="Add">
  </form>
</section>
<?php else : ?>
<?php header("Location: login.php"); ?>
<?php endif; ?>

</body>
</html>
