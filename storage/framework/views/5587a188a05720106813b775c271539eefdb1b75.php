

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
        <h4 class="card-title"><i class="mdi mdi-account-plus"></i> Add Doctors</h4>
        <form class="forms-sample" action="<?php echo e(url('edit_doctor/'.$doctors->id)); ?>" enctype="multipart/form-data" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>
            <div class="form-group">
                <input type="hidden" value="<?php echo e($doctors->id); ?>">
                <label for="exampleInputName1">Doctor Name</label>
                <input type="text" class="form-control1" value="<?php echo e($doctors->name); ?>" id="nameupd" name="nameupd" placeholder="Name" required="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Phone</label>
                <input type="text" class="form-control1" value="<?php echo e($doctors->phone); ?>" id="phoneupd" name="phoneupd" placeholder="Phone No" required="">
            </div>
            <div class="form-group">
                <label for="exampleSelectGender">Speciality</label>
                <select class="form-control1" id="specialityupd" name="specialityupd" required="">
                    <option value="">Select</option>
                    <option value="<?php echo e($doctors->speciality); ?>" selected><?php echo e($doctors->speciality); ?></option>
                    <option value="general">General Health</option>
                    <option value="cardiology">Cardiology</option>
                    <option value="dental">Dental</option>
                    <option value="neurology">Neurology</option>
                    <option value="orthopaedics">Orthopaedics</option>
                </select>
            </div>
            <div class="form-group">
                <label>Doctor Image</label>
                <input class="form-control" type="file" id="imageupd" name="imageupd">
                <img src="doctorimage/<?php echo e($doctors->img); ?>" alt="" style="width:150px">
            </div>
            <div class="form-group">
                <label for="exampleInputCity1">Room No.</label>
                <input type="text" class="form-control1" value="<?php echo e($doctors->room); ?>" id="roomupd" name="roomupd" placeholder="Room No" required="">
            </div>
            <button type="submit" class="btn btn-primary me-2">Update</button>
            <button class="btn btn-dark">Cancel</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\HMS\resources\views/admin/update_doctor.blade.php ENDPATH**/ ?>