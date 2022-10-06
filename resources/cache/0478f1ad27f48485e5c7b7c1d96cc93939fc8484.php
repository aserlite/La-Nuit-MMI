<?php $__env->startSection('css'); ?>
  <link href="/public/css/subscription.css" rel="stylesheet">
<?php $__env->stopSection(); ?>



<?php $__env->startSection('topMenu'); ?>
<nav class="top">
<form class=search action='index.php' method='GET'>
  <input type='hidden' name='action' value="subscription">
  <input type='text' name='v' placeholder='Rechercher un compte' value="<?php echo e($v); ?>">
  <button type='submit' name='search' value='rechercher'><i class='bx bx-search'></i></button>
</form>
</nav>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <section class="search">
    <?php if(!empty($searchUsers)): ?>
      <h2>Ma recherche</h2>
    <?php endif; ?>
    <?php $__currentLoopData = $searchUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class=user>
          <span>
          <a href="index.php?action=articles&id=<?php echo e($user['id']); ?>"><?php echo e($user['login']); ?></a>
          <?php if(isset($user['dateAbonnement'])): ?>
            depuis le <?php echo e(date('j F, Y', strtotime($user['dateAbonnement']))); ?>

          <?php endif; ?>
          </span>
          <?php if(isset($user['idAmi'])): ?>
            <a class="subscribe" href="index.php?action=delFriend&id=<?php echo e($user['id']); ?>">se désabonner</a>
          <?php else: ?>
            <a class="subscribe" href="index.php?action=addFriend&id=<?php echo e($user['id']); ?>">s'abonner</a>
          <?php endif; ?>

      </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
    <section class="friends">
    <h2>Mes abonnements</h2>
    <?php $__currentLoopData = $friendUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class=user>
        <span>
        <a href="index.php?action=articles&id=<?php echo e($user['id']); ?>"><?php echo e($user['login']); ?></a>
        <?php if(isset($user['dateAbonnement'])): ?>
          depuis le <?php echo e(date('j F, Y', strtotime($user['dateAbonnement']))); ?>

        <?php endif; ?>
        </span>
          <a class="subscribe" href="index.php?action=delFriend&id=<?php echo e($user['id']); ?>">se désabonner</a>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>