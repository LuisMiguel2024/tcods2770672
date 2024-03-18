
<?php $__env->startSection('tittle', 'Users Page - PetsApp'); ?>

<?php $__env->startSection('content'); ?>
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
</div>
<main>
    <header class="nav level-2">
        <a href="<?php echo e(route ('dashboard')); ?>}">
            <img src="<?php echo e(asset ('image/ico-back.svg')); ?>" alt="Back">
        </a>
        <img src="<?php echo e(asset ('image/Vector.svg')); ?>" alt="Logo">
        <a href="" class="mburger">
            <img src="<?php echo e(asset ('image/mburger.svg')); ?>" alt="Menu Burger">
        </a>
    </header>
    <section class="module">
        <h1>Module Users</h1>
        <a class="add" href="<?php echo e(url ('users/create')); ?>">
            <img src="<?php echo e(asset ('image/ico-add.svg')); ?>" width="30px" alt="Add">
            Add User
        </a>
        <table>
            <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <img src="<?php echo e(asset ('image/'.$user->photo)); ?>" alt="Pet">
                    </td>
                    <td>
                        <span><?php echo e($user->fullname); ?></span>
                        <p><?php echo e($user->role); ?></p>
                    </td>
                    <td>
                        <a href="<?php echo e(url ('users/'.$user->id)); ?>" class="show">
                            <img src="<?php echo e(asset ('image/ico-search.svg')); ?>" alt="Show">
                        </a>
                        <a href="<?php echo e(url('users/' . $user->id . '/edit')); ?>" class="edit">
                            <img src="<?php echo e(asset ('image/ico-edit.svg')); ?>" alt="Edit">
                        </a>
                        <a href="javascript:;" class="delete" data-id="<?php echo e($user->id); ?>">
                            <img src="<?php echo e(asset ('image/ico-trash.svg')); ?>" alt="Delete">
                        </a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3"><?php echo e($users->links('layouts.paginator')); ?></td>
                </tr>
            </tfoot>
        </table>
    </section>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AUTOCAD\Desktop\tcods2770672\04-laravel\larapp\resources\views/users/index.blade.php ENDPATH**/ ?>