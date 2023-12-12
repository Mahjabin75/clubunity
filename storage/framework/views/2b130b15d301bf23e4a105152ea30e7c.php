
<?php $__env->startSection('title','Profile Page'); ?>
<?php $__env->startSection('content'); ?>

<section>
    <div class="album container mt-5">
        <div class="col-12">
            <h1 class="text-uppercase text-center clr pb-4">Joined Clubs</h1>
        </div>
        <div class="row">
            <?php $__currentLoopData = $joinedClubs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $joinedClub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="featurette-image img-fluid mx-auto" style="height: 300px; object-fit:cover;"
                        src="<?php echo e(asset('assets/images/' . $joinedClub->club->clubImage)); ?>">
                        <div class="card-body">
                            <h5 class="card-text"><?php echo e($joinedClub->club->clubname); ?></h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="<?php echo e(route('club', ['clubId' => $joinedClub->club->clubId])); ?>"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </div>
    </div>

    </div>
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('include', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\websites\club\resources\views/joined-club.blade.php ENDPATH**/ ?>