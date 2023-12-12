
<?php $__env->startSection('title','Profile Page'); ?>
<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <h1 class="text-center headding p-3">All Announcement</h1>
    
    <div class="container marketing mt-5">
        <?php $__currentLoopData = $announcements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $announcement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="border rounded mb-2 p-3 row">
            <div class="col-1 pr-4">
                <img style="width: 50px" src="<?php echo e(asset('assets/images/' . $announcement->club->clubImage)); ?>">
            </div>
            <div class="col-11">
                <h5 class="w-100 m-auto"><?php echo e($announcement->club->clubname); ?> <span class="float-right text-muted h6"><?php echo e($announcement->created_at->format('d-m-Y')); ?></span></h5>
                <h6 class="mt-1"><?php echo e($announcement->title); ?></h6>
                <p class="mb-0"><?php echo e($announcement->description); ?></p>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('include', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/asim/code/tmp/daily/23-12-12/clubunity/resources/views/announcement.blade.php ENDPATH**/ ?>