<?php $__env->startSection('content'); ?>
<?php if(isset($_SESSION["login"])): ?>

    <span>Bienvenue <?php echo e($_SESSION["login"]); ?>, vous etes deja connecté </span>
    <br/><a href='index.php?action=disconnect'>Deconnecter</a>
    

<?php else: ?>
    
    <div class='formulaire'>
    <form action='index.php?action=signinT' method='post'>
    <input type='text' name='id' id='id' placeholder='Identifiant' required='required' class='formtxt'/>

    <input type='email' name='mail' id='mail' placeholder='email'  required='required' class='formtxt'/>

    <input type='password' name='mdp' id='mdp2' placeholder='Mot de passe'  required='required' class='formtxt'/>
    <input type='password' name='mdpC' id='mdp' placeholder='Confirmation Mot de passe'  required='required'class='formtxt'/>

    <input type='submit' value='S&rsquo;enregistrer' id='enregister'/>
    <?php if(isset($tmp['eror'])): ?><p class='eror'><?php echo e($tmp['eror']); ?></p><?php endif; ?>
    <div class='changeP'>
    <span>Vous avez deja un compte ? </span>
    <a href='index.php?action=login'> Vous connecter </a>
    </div>
    </form>
    
    </div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>