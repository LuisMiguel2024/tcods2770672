
<?php $__env->startSection('tittle', 'Edit Users Page - PetsApp'); ?>

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
    <section class="register create">
        <form action="<?php echo e(url('users.update')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>
            <input type="hidden" name="photoactual" value="<?php echo e($user->photo); ?>">
            <img src="<?php echo e(asset('image/.$user->photo')); ?>" id="upload" width="240px" alt="Upload">
            <input type="file" name="photo" id="photo" accept="image/*">
            <input type="number" name="document" placeholder="Document" value="<?php echo e(old('document', $user->document)); ?>">
            <input type="text" name="fullname" placeholder="Full Name" value="<?php echo e(old('fullname', $user->fullname)); ?>">
            <select name="gender">
                <option value="">SELECT GENDER...</option>
                <option value="Female" <?php if(old('gender', $user->gender) == 'Female'): ?> selected <?php endif; ?>>Female</option>
                <option value="Male" <?php if(old('gender', $user->gender) == 'Male'): ?> selected <?php endif; ?>>Male</option>
            </select>
            <input type="date" name="birth" placeholder="BirthDate" value="<?php echo e(old('birth', $user->birth)); ?>">
            <input type="text" name="phone" placeholder="Phone Number" value="<?php echo e(old('phone', $user->phone)); ?>">
            <input type="email" name="email" placeholder="Email" value="<?php echo e(old('email', $user->email)); ?>">
            <button type="submit">Edit</button>
        </form>
    </section>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('js'); ?>
<script>
    $(document).ready(function () {
        $('#upload').click(function (e) { 
            e.preventDefault()
            $('#photo').click()
        })

        $('#photo').change(function (e) { 
            e.preventDefault();
            let reader = new FileReader()
            reader.onload = function(event) {
                $('#upload').attr('src', event.target.result)
            }
            reader.readAsDataURL(this.files[0])
        })
    })
</script>
<?php if(count($errors->all()) > 0): ?>
    <?php $error = '' ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $error .= '<li>' . $message . '</li>' ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <script>
    $(document).ready(function () {
        Swal.fire({
            position: "top-end",
            title: "Ops!",
            html: `<?php echo $error ?>`,
            icon: "error",
            showConfirmButton: false,
            timer: 5000
        })
    })
    </script>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AUTOCAD\Desktop\tcods2770672\04-laravel\larapp\resources\views/users/edit.blade.php ENDPATH**/ ?>