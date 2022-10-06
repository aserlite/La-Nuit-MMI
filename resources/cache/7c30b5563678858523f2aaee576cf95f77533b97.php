<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    <?php $__env->startSection('css'); ?>
    <?php echo $__env->yieldSection(); ?>
    <link href="/public/css/normalize.css" rel="stylesheet">
    <link href="/public/css/styleOn.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
</head>

<body>

  <header>
    <a href="index.php?action=homepage" class="logo"><h1>Instagram</h1></a>
    <div>
      <a href="index.php?action=friends" class="ico"><i class='bx bx-user-plus bx-lg' ></i></a>
      <a href="index.php?action=publication" class="ico"><i class='bx bxs-paper-plane bx-lg' style='color:#707fef'></i> </a>   
    </div>
  </header>


<div class="content">
  <section>
    <?php echo $__env->yieldContent('content'); ?>
  </section>
</div>

  <footer>
  <a href="index.php?action=homepage" class="ico"><i class='bx bx-home bx-lg' ></i></a>
  <a href="index.php?action=search" class="ico"><i class='bx bx-search bx-lg' ></i></a>
  <a href="index.php?action=articles" class="ico"><i class='bx bx-user bx-lg' ></i></a>
  <a href="index.php?action=logout" class="ico"><i class='bx bx-log-out-circle bx-lg' ></i></a>
</footer>
</body>
</html>

