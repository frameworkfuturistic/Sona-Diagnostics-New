<div class="page-section bg-white" id="homeCollection">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Book Test With Home Collection</h1>

        <form class="main-form" action="<?php echo e(url('appointment')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('post'); ?>
            <div class="row mt-5 ">
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" class="form-control" placeholder="Patient's Name" name="name" required>
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="email" class="form-control" placeholder="Email address.." name="email" required>
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="date" class="form-control" name="date" required>
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select id="doctor" class="custom-select select2" name="doctor" required>
                        <option value="">--Select Doctor--</option>
                        <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($doctor->name); ?>"><?php echo e($doctor->name); ?>--(<?php echo e($doctor->speciality); ?>)--</option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <input type="text" class="form-control" placeholder="Phone Number.." name="phone" required>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <label for="">Select Test Group</label>
                    <select name="testGroup[]" id="testGroup" placeholder="Test Group Name" class="custom-select select2" multiple="multiple">
                          <option value="">Select Test Group</option>
                          <?php $__currentLoopData = $testGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($testGroup->GroupName); ?>"><?php echo e($testGroup->GroupName); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="message" id="message" class="form-control" rows="6"
                        placeholder="Enter message.."></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
        </form>
    </div>
</div>
<?php /**PATH D:\laragon\www\HMS\resources\views/user/appointment.blade.php ENDPATH**/ ?>