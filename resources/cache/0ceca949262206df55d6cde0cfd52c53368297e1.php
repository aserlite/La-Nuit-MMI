<?php $__env->startSection('css'); ?>
  <link href="/public/css/articles.css" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

  <?php if(isset($articles)): ?>
    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class='article-container' id='<?php echo e($line['id']); ?>'><a href='index.php?action=articles&id=<?php echo e($line['idAuteur']); ?>' class='username'><?php echo e($line['login']); ?></a>
      <img src='<?php echo e($line['img_url']); ?>' class='illustration'>
      <span class='titleArticle'><?php echo e($line['titre']); ?></span>
      <div class='wrapper'>
      <span class='tagsArticle'><?php echo e($line['tags']); ?></span> 
      <a href='index.php?action=com&idArticle=<?php echo e($line['id']); ?>' class='ico'><i class='bx bx-message-rounded-dots bx-lg'></i></a>
      <?php if(isset($line['liked'])): ?>
          <a href='index.php?action=unlike&idUser=<?php echo e($id); ?>&idArticle=<?php echo e($line["id"]); ?>' class='ico'><i class='bx bxs-heart bx-lg' style='color:#ff0000'  ></i></a>
        <?php else: ?>
          <a href='index.php?action=like&idUser=<?php echo e($id); ?>&idArticle=<?php echo e($line['id']); ?>' class='ico'><i class='bx bx-heart bx-lg' ></i></a>
        <?php endif; ?>
      </div></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php else: ?>
  <div class='pasAbo'>
    <p> Vous n'avez aucun abonnement</p>
    <a href=index.php?action=friends>Découvrir de nouveaux comptes</a>
  </div>
  <?php endif; ?>
<div class='sep'></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appOn', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>