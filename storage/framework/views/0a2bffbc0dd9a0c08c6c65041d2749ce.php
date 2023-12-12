
<?php $__env->startSection('title','Super Admin Home Page'); ?>
<?php $__env->startSection('content'); ?>
<div class="admin-content">

<div class="container">

<div class="dash mt-4">
<div class="row">

<div class="col-md-4">
      <div class="card-counter danger">
        <i class="ri-ancient-gate-fill"></i>
        <span class="count-numbers"><?php echo e($clubs); ?></span>
        <span class="count-name">Total Clubs</span>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card-counter primary">
        <i class="ri-team-fill"></i>
        <span class="count-numbers"><?php echo e($members); ?></span>
        <span class="count-name">Total Members</span>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card-counter success">
        <i class="ri-calendar-check-fill"></i>
        <span class="count-numbers"><?php echo e($requests); ?></span>
        <span class="count-name">Total Requests</span>
      </div>
    </div>
  </div>
</div>
    <div class="heading my-4">
      <h1>All Clubs</h1>
    </div>
    <div class="content">
      <table class="table border">
        <thead class="bg-secondary">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Club Logo</th>
            <th scope="col">Club Name</th>
            <th scope="col">Club Email</th>
            <th scope="col">Club Location</th>
            <th scope="col">Club Number</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
            $serial = 1; 
        ?>
          <?php $__currentLoopData = $allclubs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $club): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td scope="row"><?php echo e($serial++); ?></td> 
              <td><img style="height: 60px; object-fit:cover;" src="<?php echo e(asset('assets/images/' . $club->clubImage)); ?>"></td>
              <td><?php echo e($club->clubname); ?></td>
              <td><?php echo e($club->email); ?></td>
              <td><?php echo e($club->location); ?></td>
              <td><?php echo e($club->number); ?></td>
              <td><a href="<?php echo e(route('super-admin/remove-club', ['clubId' => $club->clubId])); ?>"><button class="btn btn-danger"><i class="ri-delete-bin-2-fill"></i></button></a></td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
  </div>


</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.include', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\websites\club\resources\views/super-admin/home.blade.php ENDPATH**/ ?>