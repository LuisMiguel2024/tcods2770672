
<?php $__env->startSection('tittle', 'Show User Page - PetsApp'); ?>

<?php $__env->startSection('content'); ?>
<header class="nav level-2">
    <a href="<?php echo e(url ('users')); ?>">
        <img src="<?php echo e(asset ('image/ico-back.svg')); ?>" alt="Back">
    </a>
    <img src="<?php echo e(asset ('image/Vector.svg')); ?>" alt="Logo">
    <a href="" class="mburger">
        <img src="<?php echo e(asset ('image/mburger.svg')); ?>" alt="Menu Burger">
    </a>
</header>
    <section class="show">
        <h1>Show User</h1>
        <img src="<?php echo e(asset ('image/'.$user->photo)); ?>" class="photo" alt="Photo">
        <p class="role"><?php echo e($user->role); ?></p>
        <div class="info">
            <p><?php echo e($user->document); ?></p>
            <p><?php echo e($user->fullname); ?></p>
            <p><?php echo e($user->email); ?></p>   
            <p><?php echo e($user->phone); ?></p>
            <p><?php echo e($user->gender); ?></p>
            <p><?php echo e(Carbon\Carbon::parse($user->birth)->diffForHumans()); ?></p>
        </div>
    </section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AUTOCAD\Desktop\tcods2770672\04-laravel\larapp\resources\views/users/show.blade.php ENDPATH**/ ?>