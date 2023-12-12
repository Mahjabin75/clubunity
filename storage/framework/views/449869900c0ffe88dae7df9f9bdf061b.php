
<?php $__env->startSection('title','Profile Page'); ?>
<?php $__env->startSection('content'); ?>

<section>
   
    <div class="container marketing mt-5">
        
        <div class="row featurette p-5">
            <div class="col-md-5 text-center">
                <img class="featurette-image img-fluid mx-auto" style="height: 300px;" src="<?php echo e(asset('assets/images/' . $club->clubImage)); ?>">
            </div>
            <div class="col-md-7">
                <h2 class="heading"><?php echo e($club->clubname); ?></h2>
                <p class="lead"><?php echo e($club->details); ?></p>
                <p><span class="font-weight-bold">Club Email:</span> <?php echo e($club->email); ?></p>
                <p><span class="font-weight-bold">Phone no:</span> <?php echo e($club->number); ?></p>
                <p><span class="font-weight-bold">Location:</span> <?php echo e($club->location); ?></p>

                <?php if(auth()->guard()->check()): ?>
                <?php if(auth()->user()->role == 'user'): ?>
                    <?php if($joinedCheck=="joined"): ?>
                        <a href="<?php echo e(route('leave-req', ['clubId' => $club->clubId])); ?>"><button type="button" class="btn btn-danger">Leave</button></a>
                    <?php elseif($joinedCheck=="pending"): ?>
                        <button type="button" class="btn btn-secondary disabled">Requested</button>
                    <?php else: ?>
                        <a href="<?php echo e(route('join-req', ['clubId' => $club->clubId])); ?>"><button type="button" class="btn btn-primary">Join</button></a>
                    <?php endif; ?>
                <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="oldPost border w-75 mx-auto p-2">
            <h3 class="text-center p-3">Club Posts</h3>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="border p-3 rounded mb-2" style="Background:#f7f7f7;">
                <div class="text-center">
                    <img class="w-75 mb-3 rounded" src="<?php echo e(asset('assets/images/' . $post->image)); ?>">
                </div>
                <h5 class="m-auto w-75"><?php echo e($post->title); ?> <span class="float-right text-secondary text-muted h6"><?php echo e($club->created_at->format('d-m-Y')); ?></span></h5>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </div>

    </div>

</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('include', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\websites\club\resources\views/club.blade.php ENDPATH**/ ?>