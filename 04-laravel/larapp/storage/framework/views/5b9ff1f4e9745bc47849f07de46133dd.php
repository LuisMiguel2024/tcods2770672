
<?php $__env->startSection('tittle', 'Users Page - PetsApp'); ?>

<?php $__env->startSection('content'); ?>

    <header class="nav level-2">
        <a href="<?php echo e(route ('dashboard')); ?>">
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
                        <a href="<?php echo e(url ('users/' .$user->id)); ?>" class="show">
                            <img src="<?php echo e(asset ('image/ico-search.svg')); ?>" alt="Show">
                        </a>
                        <a href="<?php echo e(url('users/' . $user->id . '/edit')); ?>" class="edit">
                            <img src="<?php echo e(asset ('image/ico-edit.svg')); ?>" alt="Edit">
                        </a>
                        <form action="<?php echo e(url('users/' .$user->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button type="button" class="btn-delete">
                        <img src="<?php echo e(asset ('image/ico-trash.svg')); ?>" alt="Delete">
                    </button>
                    </form>
                    </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3">
                                <?php echo e($users->links('layouts.paginator')); ?>

                            
                        </td>
                        </tr>
                    </tfoot>
                    </table>
                    </section>
                    <?php $__env->stopSection(); ?>

                    <?php $__env->startSection('js'); ?>
    <?php if(session('message')): ?>
        <script>
        $(document).ready(function () {
            Swal.fire({
                position: "top-end",
                title: "Great job!",
                text: "<?php echo e(session('message')); ?>",
                icon: "success",
                showConfirmButton: false,
                timer: 5000
            })
        })
        </script>
    <?php endif; ?>

    <script>
        $(document).ready(function () {
            $('body').on('click', '.btn-delete', function () {
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#1f7a8c",
                    cancelButtonColor: "#1f7a8c",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                        if (result.isConfirmed) {
                            $(this).parent().submit()
                        }
                    })
                })
            })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AUTOCAD\Desktop\tcods2770672\04-laravel\larapp\resources\views/users/index.blade.php ENDPATH**/ ?>