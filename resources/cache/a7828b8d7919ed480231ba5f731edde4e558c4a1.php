<?php $__env->startSection('css'); ?>
  <link href="/public/css/abo.css" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class='wrapper'>

<?php if(isset($_SESSION['searchF'])): ?>
  <?php $__currentLoopData = $friends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class='wrapperAbo'>
      <div class='aboTxt'>
        <p class='aboname'><?php echo e($line['login']); ?></p>
        <?php if(isset($line['dt_sub'])): ?><p class='abodate'>Suivi depuis le :  <?php echo e($line['dt_sub']); ?></p> <?php endif; ?>
      </div>
      <?php if(isset($line['dt_sub'])): ?>
        <a href='index.php?action=unfollow&idUser=<?php echo e($id); ?>&idAmi=<?php echo e($line['idUser']); ?>' class='ico'><i class='bx bx-user-minus bx-lg'></i></a>
      <?php else: ?>
      <a href='index.php?action=follow&idUser=<?php echo e($id); ?>&idAmi=<?php echo e($line['idUser']); ?>' class='ico'><i class='bx bx-user-plus bx-lg'></i></a>
      <?php endif; ?>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
  <span class='abo'> Mes Abonnements </span>
  <?php if($abo != NULL): ?>
  <?php $__currentLoopData = $abo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class='wrapperAbo'>
    <div class='aboTxt'>
      <span class='aboname'><?php echo e($line['login']); ?></span>
      <?php if(isset($line['dt_abo'])): ?>
      <p class='abodate'>Suivi depuis le :  <?php echo e($line['dt_abo']); ?></p>      <?php endif; ?>
    </div>
    <a href='index.php?action=unfollow&idUser=<?php echo e($id); ?>&idAmi=<?php echo e($line['idUser']); ?>' class='ico'>
      <i class='bx bx-user-minus bx-lg'></i>
    </a>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php else: ?>
    <span class='aboN'> Vous n'avais aucun abonnement </span>
  <?php endif; ?>
  
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.searchF', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>