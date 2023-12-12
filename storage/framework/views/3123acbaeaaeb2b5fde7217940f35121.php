
<?php $__env->startSection('title','Profile'); ?>
<?php $__env->startSection('content'); ?>
<div class="main profile">
    <div class="container mt-5">
        <h1 class="text-center headding p-5">Profile</h1>
        
        <div id="accordion">
            <div class="card">
                <div class="card-header p-0" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn text-left collapsed w-100 p-3 shadow-none" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Change Name
                        </button>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                    <form method="POST" action="<?php echo e(route('update-name')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="name">New name</label>
                            <input type="text" class="form-control" id="name" name="nname">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                    </div>
                </div>
            </div>
            <div class="card mt-5">
                <div class="card-header p-0" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn text-left collapsed w-100 p-3 shadow-none" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Change Password
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                    <form method="POST" action="<?php echo e(route('update-password')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="pass">New password</label>
                            <input type="password" class="form-control" id="pass" name="npassword">
                        </div>
                        <div class="form-group">
                            <label for="pass2">Confirm password</label>
                            <input type="password" class="form-control" id="pass2" name="npassword_confirmation">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('include', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\websites\club\resources\views/profile.blade.php ENDPATH**/ ?>