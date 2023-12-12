<!-- FOOTER -->

<footer class="container">
    <hr class="featurette-divider">

    <a class="float-right" href=""><button class="btn bg-clr text-white"><i class="ri-arrow-up-circle-line"></i></button></a>
    <p>© <?php echo e(date('Y')); ?> Bracu,Club Unity · <a href="<?php echo e(route('privacy')); ?>">Privacy</a> · <a href="<?php echo e(route('faq')); ?>">FAQ</a></p>
</footer>

<div class="myalert" id="myalert">
        <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="alert alert-danger"><?php echo e($error); ?></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        <?php if(session()->has('error')): ?>
            <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
        <?php endif; ?>

        <?php if(session()->has('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>
    </div>


    <script>
        var myAlertElement = document.getElementById("myalert");

        function hideMyAlert() {
            myAlertElement.style.display = "none";
        }

        setTimeout(hideMyAlert, 3000);
    </script><?php /**PATH /home/asim/code/tmp/daily/23-12-12/clubunity/resources/views/layout/footer.blade.php ENDPATH**/ ?>