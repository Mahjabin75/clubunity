
<?php $__env->startSection('title','Members Page'); ?>
<?php $__env->startSection('content'); ?>
<div class="admin-content">

  <div class="container">
    <div class="req">
      <div class="heading my-4">
        <h1>New Member Requests</h1>
      </div>
      <div class="content">
        <table class="table border">
          <thead class="bg-secondary">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Id</th>
              <th class="text-center" scope="col" colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $serial = 1; 
            ?>
            <?php $__currentLoopData = $memberReqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $memberReq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td scope="row"><?php echo e($serial++); ?></td> 
                <td><?php echo e($memberReq->user->name); ?></td>
                <td><?php echo e($memberReq->user->email); ?></td>
                <td><?php echo e($memberReq->userId); ?></td>
                <td class="text-center"><a href="<?php echo e(route('admin/accept-member/', ['id' => $memberReq->id])); ?>"><button class="btn btn-success"><i class="ri-checkbox-circle-fill"></i></button></a></td>
                <td class="text-center"><a href="<?php echo e(route('admin/decline-member/', ['id' => $memberReq->id])); ?>"><button class="btn btn-danger"><i class="ri-close-circle-fill"></i></button></a></td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="all">
      <div class="heading my-4">
        <h1>All Members</h1>
      </div>
      <div class="content">
        <table class="table border">
          <thead class="bg-secondary">
            <tr>
            <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Id</th>
              <th class="text-center" scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $serial = 1; 
            ?>
            <?php $__currentLoopData = $allMember; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                  <td scope="row"><?php echo e($serial++); ?></td> 
                  <td><?php echo e($member->user->name); ?></td>
                  <td><?php echo e($member->user->email); ?></td>
                  <td><?php echo e($member->userId); ?></td>
                  <td class="text-center"><a href="<?php echo e(route('admin/remove-member/', ['id' => $member->id])); ?>"><button class="btn btn-warning"><i class="ri-user-unfollow-fill"></i></button></a></td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.include', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\websites\club\resources\views/admin/members.blade.php ENDPATH**/ ?>