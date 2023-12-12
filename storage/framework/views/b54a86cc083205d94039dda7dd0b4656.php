
<?php $__env->startSection('title','Admin Home Page'); ?>
<?php $__env->startSection('content'); ?>
<div class="admin-content">

  <div class="container">
    <div class="content">
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
            </div>
        </div>

      <div class="postContent">
        <div class="newPost w-75 mb-5 mx-auto" id="accordion">
            <div class="card mt-5">
                <div class="card-header p-0" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn text-left collapsed w-100 p-3 shadow-none" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           New Post
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                    <form action="<?php echo e(route('upload.image')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Post Image</label>
                            <input type="file" name="image" class="form-control-file border p-1 rounded-sm" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                            <label>Post Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Post</button>
                    </form>
                    </div>
                </div>
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

    </div>
  </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.include', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\websites\club\resources\views/admin/home.blade.php ENDPATH**/ ?>