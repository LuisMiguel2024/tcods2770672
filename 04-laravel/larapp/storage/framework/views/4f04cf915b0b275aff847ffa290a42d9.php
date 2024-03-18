<?php $__env->startSection('title', 'Register Page - PetsApp'); ?>

<?php $__env->startSection('content'); ?>
<header>
    <img src="<?php echo e(asset('image/Vector.svg')); ?>" alt="Logo">
</header>
<section class="register create">
    <menu>
        <a href="<?php echo e(url('login/')); ?>">Login</a>
        <a href="javascript:;">Register</a>
    </menu>
    <form action="<?php echo e(route('register')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <img src="<?php echo e(asset('image/ph_user-fill.svg')); ?>" id="upload" width="240px" alt="Upload">
        <input type="file" name="photo" id="photo" accept="image/*">
        <input type="number" name="document" placeholder="Document" value="<?php echo e(old('document')); ?>">
        <input type="text" name="fullname" placeholder="Full Name" value="<?php echo e(old('fullname')); ?>">
        <select name="gender">
            <option value="">Select gender...</option>
            <option value="Female" <?php if(old('gender') == 'Female'): ?> selected <?php endif; ?>>Female</option>
            <option value="Male" <?php if(old('gender') == 'Male'): ?> selected <?php endif; ?>>Male</option>
        </select>
        <input type="date" name="birth" placeholder="BirthDate" value="<?php echo e(old('birth')); ?>">
        <input type="text" name="phone" placeholder="Phone Number" value="<?php echo e(old('phone')); ?>">
        <input type="email" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="password_confirmation" placeholder="Confirm Password">
        <button type="submit">Register</button>
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
    $(document).ready(function() {
        Swal.fire({
            position: "center",
            title: "Ops!",
            html: `<?php echo $error ?>`,
            icon: 'error',
            showconfirmbutton: false,
            timer: 5000
        })
    })
</script>
    
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AUTOCAD\Desktop\tcods2770672\04-laravel\larapp\resources\views/auth/register.blade.php ENDPATH**/ ?>