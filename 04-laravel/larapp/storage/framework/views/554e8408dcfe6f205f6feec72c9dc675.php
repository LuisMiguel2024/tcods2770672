<?php $__env->startSection('tittle', 'Welcome Page - PetsApp'); ?>

<?php $__env->startSection('content'); ?>
<header>
    <img src="<?php echo e(asset ('image/Vector.svg')); ?>" alt="logo">
</header>
<section class="homepage">
<img src="<?php echo e(asset ('image/logoinicion.png')); ?>" alt="imagen inicio">
<a href="<?php echo e(url ('login/')); ?>">Enter</a>
</section>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AUTOCAD\Desktop\tcods2770672\04-laravel\larapp\resources\views/welcome.blade.php ENDPATH**/ ?>