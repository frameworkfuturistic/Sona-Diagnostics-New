

<?php $__env->startSection('head'); ?>
<base href="/public">
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
        <h4 class="card-title"><i class="mdi mdi-account-plus"></i> Send Email</h4>
        <form class="forms-sample" action="<?php echo e(url('sendemail',$appointments->id)); ?>" method="post">
            <?php echo csrf_field(); ?> 
            <?php echo method_field('post'); ?>
            <div class="form-group">
                <label for="exampleInputEmail3">Greeting</label>
                <input type="text" class="form-control1" id="greeting" name="greeting" required="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Body</label>
                <input type="text" class="form-control1" id="body" name="body" required="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Action Text</label>
                <input type="text" class="form-control1" id="text" name="text" required="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Action Url</label>
                <input type="text" class="form-control1" id="url" name="url" required="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">End Part</label>
                <input type="text" class="form-control1" id="endpart" name="endpart" required="">
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <button class="btn btn-dark">Cancel</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\HMS\resources\views/admin/mail_patient.blade.php ENDPATH**/ ?>