
<?php $__env->startSection('title','Notification Page'); ?>
<?php $__env->startSection('content'); ?>
<div class="admin-content">

  <div class="container">
    <div class="heading my-4">
      <h1>Add Notification</h1>
    </div>
    <div class="content pt-4">
      <form action="<?php echo e(route('save-notification')); ?>" method="POST">
      <?php echo csrf_field(); ?>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Notification Title</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="title">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>
  </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.include', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\websites\club\resources\views/admin/notification.blade.php ENDPATH**/ ?>