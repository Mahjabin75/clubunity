
<?php $__env->startSection('title','Home Page'); ?>
<?php $__env->startSection('content'); ?>

<section>
    <div class="container">
        <div id="myCarousel" class="carousel slide pt-5" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img class="first-slide" src="<?php echo e(asset('assets/images/slider1.jpg')); ?>" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-center">
                            <!-- <h1>Example headline.</h1> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img class="second-slide" src="<?php echo e(asset('assets/images/slider2.jpg')); ?>" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption text-center">
                            <!-- <h1>Another example headline.</h1> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="<?php echo e(asset('assets/images/slider3.JPG')); ?>" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-center">
                            <!-- <h1>One more for good measure.</h1> -->
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container marketing">

        <div class="album my-5">
            <div class="col-12">
                <h1 class="text-uppercase text-center headding pb-4">Featured Clubs</h1>
            </div>
            <div class="row">
            <?php $__currentLoopData = $clubs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $club): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="featurette-image img-fluid mx-auto" style="height: 300px; object-fit:cover;"
                        src="<?php echo e(asset('assets/images/' . $club->clubImage)); ?>">
                        <div class="card-body">
                            <h5 class="card-text"><?php echo e($club->clubname); ?></h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="<?php echo e(route('club', ['clubId' => $club->clubId])); ?>"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
</div>

    <div class="bg-secondary p-4 text-white">
        <div class="container">
           <div class="row featurette my-5">
                <div class="col-md-6">
                    <img class="featurette-image img-fluid mx-auto" style="height: 400px;" src="<?php echo e(asset('assets/images/about.JPG')); ?>">
                </div>
                <div class="col-md-6">
                    <h2 class="heading mt-5">About this website</h2>
                    <p class="lead py-3">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
                        semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                        commodo.</p>
                    <a href="<?php echo e(route('clublist')); ?>"><button type="button" class="btn btn-primary">View All Clubs</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div>
            <h1 class="text-uppercase text-center clr pb-4">upcomming event</h1>
            <div class="text-center">
                <div class="calendar" id="calendar"></div>
            </div>
        </div>

    </div>

</section>

<!-- Inside your Blade view ('home.blade.php') -->
<script>
    console.log(<?php echo json_encode($events); ?>);
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var events = <?php echo json_encode($events); ?>; 

        var calendar = new FullCalendar.Calendar(calendarEl, {
            events: events,
        });

        calendar.render();
    });
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('include', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\websites\club\resources\views/home.blade.php ENDPATH**/ ?>