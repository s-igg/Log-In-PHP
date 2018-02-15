<header class="d-flex col-12 align-items-center" id="profile-header">
  <figure id='idle' class="">
    <?php if ($_SESSION['ProfilePic']): ?>
      <img src="img/profile-img/<? echo $_SESSION['ProfilePic']; ?>" alt="<?php echo $_SESSION['Username'] ?>">
        <?php else: ?>
          <i class="fas fa-user"></i>
    <?php endif; ?>
    <h3 class="h3"><?php echo $_SESSION['Username'] ?></h3>
  </figure>
</header>
