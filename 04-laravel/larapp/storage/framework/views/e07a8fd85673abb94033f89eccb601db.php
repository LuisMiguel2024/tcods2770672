<?php $__env->startSection('title', 'Dashboard Page - PetsApp'); ?>

<?php $__env->startSection('content'); ?>

<div class="menu">
    <a href="javascript:;" class="closem">
        <img src="<?php echo e(asset('image/closem.svg')); ?>" alt="">
    </a>
    <nav>
        <img src="<?php echo e(asset('image') . '/' . Auth::user()->photo); ?>" alt="Photo">
        <h4><?php echo e(Auth::user()->fullname); ?></h4>
        <h5><?php echo e(Auth::user()->role); ?></h5>
        <form action="<?php echo e(route('logout')); ?>" method="post">
            <button class="closes">Log Out</button>
            <?php echo csrf_field(); ?>
        </form>
    </nav>
</div>


<header class="nav level-0">
    <a href="">
        <img src="<?php echo e(asset('image/ico-back.svg')); ?>" alt="Back">
    </a>
    <img src="<?php echo e(asset('image/Vector.svg')); ?>" alt="Logo">
    <a href="javascript:;" class="mburger">
        <img src="<?php echo e(asset('image/mburger.svg')); ?>" alt="Menu Burger">
    </a>
</header>


<section class="dashboard">
    <h1>Dashboard: Customer</h1>
    <menu>
        <ul>
            <li>
                <a href="<?php echo e(url('mydata')); ?>">
                    <img src="<?php echo e(asset('image/ico-users.svg')); ?>" alt="My data">
                    <span>My Data</span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(url('myadoptions')); ?>">
                    <img src="<?php echo e(asset('image/ico-adopt.svg')); ?>" alt="My data">
                    <span>My Adoptions</span>
                </a>
            </li>
        </ul>
    </menu>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
    $(document).ready(function () {
        $('body').on('click', '.mburger',  function () {
            $('.menu').addClass('open')
        })
        $('body').on('click', '.closem',  function () {
            $('.menu').removeClass('open')
        })
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AUTOCAD\Desktop\tcods2770672\04-laravel\larapp\resources\views/dashboard-customer.blade.php ENDPATH**/ ?>