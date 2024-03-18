<div class="menu">
    <a href="javascript:;" class="closem">
        <img src="<?php echo e(asset('image/uiw_close.svg')); ?>" alt="">
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
</div><?php /**PATH C:\Users\AUTOCAD\Desktop\tcods2770672\04-laravel\larapp\resources\views/layouts/menuburguer.blade.php ENDPATH**/ ?>