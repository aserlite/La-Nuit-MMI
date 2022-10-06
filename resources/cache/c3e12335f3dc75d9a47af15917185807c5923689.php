<nav class="bottom">
  <a class="<?php echo e(isset($activeMenu) && $activeMenu =='actu' ? 'active' : ''); ?>" href="index.php"><i class='bx bx-home'></i></a>
  <a class="<?php echo e(isset($activeMenu) && $activeMenu =='search' ? 'active' : ''); ?>" href="index.php?action=search"><i class='bx bx-search'></i></a>
  <a class="<?php echo e(isset($activeMenu) && $activeMenu =='article' ? 'active' : ''); ?>" href="index.php?action=articles"><i class='bx bx-user'></i></a>
  <a href="index.php?action=logout"><i class='bx bx-log-out-circle'></i></a>
</nav>
