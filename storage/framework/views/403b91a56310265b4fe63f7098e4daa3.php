
<?php $__env->startSection('title','Super Admin Home Page'); ?>
<?php $__env->startSection('content'); ?>
<div class="admin-content">

  <div class="container">
  <div class="heading my-4">
      <h1>Add New Club</h1>
    </div>
    <div class="content">
        <form method="POST" action="<?php echo e(route('newClub')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?> 

            <div class="form-group">
                <label for="clubImage">Club Image</label>
                <input type="file" class="form-control-file border p-1 rounded" id="clubImage" name="image">
            </div>

            <div class="form-group">
                <label for="clubName">Club Name</label>
                <input type="text" class="form-control" id="clubName" name="clubname">
            </div>

            <div class="form-group">
                <label for="clubDescription">Club Description</label>
                <textarea class="form-control" id="clubDescription" name="details" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="leaderName">Club Leader Name</label>
                <input type="text" class="form-control" id="leaderName" name="leader">
            </div>

            <div class="form-group">
                <label for="clubLocation">Club Location</label>
                <input type="text" class="form-control" id="clubLocation" name="location">
            </div>

            <div class="form-group">
                <label for="clubNumber">Club Number</label>
                <input type="text" class="form-control" id="clubNumber" name="number">
            </div>

            <div class="form-group">
                <label for="clubEmail">Club Email</label>
                <input type="email" class="form-control" id="clubEmail" name="email">
            </div>

            <div class="form-group">
                <label for="clubPassword">Password</label>
                <input type="password" class="form-control" id="clubPassword" name="password">
            </div>

            <div class="form-group">
                <label for="clubConfirmPassword">Confirm Password</label>
                <input type="password" class="form-control" id="clubConfirmPassword" name="password_confirmation">
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        </form>

    </div>

  </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.include', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\websites\club\resources\views/super-admin/addClub.blade.php ENDPATH**/ ?>