
<?php $__env->startSection('title','Requests Page'); ?>
<?php $__env->startSection('content'); ?>
<div class="admin-content">

  <div class="container">
    <div class="req">
      <div class="heading my-4">
        <h1>New Event Requests</h1>
      </div>
      <div class="content">
        <table class="table border">
          <thead class="bg-secondary">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Club Name</th>
              <th scope="col">Date</th>
              <th scope="col">Title</th>
              <th class="text-center" scope="col" colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $serial = 1; 
          ?>
            <?php $__currentLoopData = $eventReqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $req): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td scope="row"><?php echo e($serial++); ?></td> 
                  <td><?php echo e($req->club->clubname); ?></td>
                  <td><?php echo e((new \DateTime($req->startDate))->format('d-m-Y')); ?></td>
                  <td><?php echo e($req->title); ?></td>
                  <td class="text-center"><a href="<?php echo e(route('super-admin/accept-eve', ['id' => $req->id])); ?>"><button class="btn btn-success"><i class="ri-checkbox-circle-fill"></i></button></a></td>
                  <td class="text-center"><a href="<?php echo e(route('super-admin/decline-eve', ['id' => $req->id])); ?>"><button class="btn btn-danger"><i class="ri-close-circle-fill"></i></button></a></td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="all">
      <div class="heading my-4">
        <h1>All Approved Events</h1>
      </div>
      <div class="content">
        <table class="table border">
          <thead class="bg-secondary">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Club Name</th>
              <th scope="col">Date</th>
              <th scope="col">Title</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $allEvent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row">1</th>
                    <td><?php echo e($event->club->clubname); ?></td>
                    <td><?php echo e((new \DateTime($event->startDate))->format('d-m-Y')); ?></td>
                    <td><?php echo e($event->title); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.include', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\websites\club\resources\views/super-admin/requests.blade.php ENDPATH**/ ?>