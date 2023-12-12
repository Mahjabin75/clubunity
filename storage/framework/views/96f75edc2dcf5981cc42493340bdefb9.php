
<?php $__env->startSection('title','Settings'); ?>
<?php $__env->startSection('content'); ?>
<div class="admin-content">

  <div class="container">
    <div class="heading my-4">
      <h1>Settings</h1>
    </div>
     <div id="accordion">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.include', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\websites\club\resources\views/super-admin/settings.blade.php ENDPATH**/ ?>