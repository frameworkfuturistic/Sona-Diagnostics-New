

<?php $__env->startSection('mycss'); ?>
<!-- select 2 -->
<link rel="stylesheet" href="admin/assets/vendors/select2/select2.min.css">
<link rel="stylesheet" href="admin/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
<!-- select 2 -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if($message = Session::get('success')): ?>
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>
<!-- error msg -->
<?php if($errors->any()): ?>
    <?php echo e(implode('', $errors->all('<div>:message</div>'))); ?>

<?php endif; ?>
<!-- error msg -->
<div class="card">
    <div class="card-body">
        <h4 class="card-title"><i class="mdi mdi-account-plus"></i> Book Home Collections</h4>
        <form action="<?php echo e(url('appointment')); ?>" method="post" role="form" class="php-email-form" data-aos="fade-up"
                data-aos-delay="100">
                <?php echo csrf_field(); ?>
                <?php echo method_field('post'); ?>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control1" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control1" name="email" id="email" placeholder="Your Email"
                            required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="tel" class="form-control1" name="phone" id="phone" placeholder="Your Phone"
                            required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="date" name="date" class="form-control1 datepicker" id="date"
                            placeholder="Appointment Date" required>
                    </div>
                </div>
                <div class="row">
                
                    <div class="col-md-12 form-group mt-3">
                        <label for="testGroup">Select Test Group</label>
                        <select name="testGroup[]" id="testGroup" class="form-select form-control1 js-example-basic-multiple" multiple="multiple">
                            <option value="" disabled>Select Test Group</option>
                            <?php $__currentLoopData = $testGroups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($testGroup->GroupName); ?>"><?php echo e($testGroup->GroupName); ?> (<?php echo e($testGroup->Charge); ?> ₹)</option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                </div>

                <div class="form-group mt-3">
                    <textarea class="form-control1" name="message" id="message" rows="5"
                        placeholder="Message (Optional)"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit">Book Test</button>
                </div>
            </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="admin/assets/vendors/select2/select2.min.js"></script>
<script src="admin/assets/js/select2.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\HMS\resources\views/admin/book_appointment.blade.php ENDPATH**/ ?>