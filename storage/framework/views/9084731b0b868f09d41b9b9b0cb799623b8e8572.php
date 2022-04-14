

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
        <h4 class="card-title"><i class="mdi mdi-account-plus"></i> Add Collection Centers</h4>
        <form class="forms-sample" action="<?php echo e(url('add_CC')); ?>" method="POST" id="submit">
            <?php echo csrf_field(); ?> 
            <div class="form-group">
                <label for="exampleInputName1">Collection Center Name</label>
                <input type="text" class="form-control1" id="name" name="name" placeholder="Collection Center Name" required>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Email</label>
                <input type="text" class="form-control1" id="email" name="email" placeholder="Collection Center Email" required>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Phone</label>
                <input type="text" class="form-control1" id="phone" name="phone" placeholder="Phone No" required>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Address</label>
                <input type="text" class="form-control1" id="address" name="address" placeholder="Address" required>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Create Password</label>
                <input type="password" class="form-control1" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Confirm Password</label>
                <input type="password" class="form-control1" id="password1" name="password1" placeholder="Password" required>
                <input type="hidden" class="form-control1" id="userType" name="userType" value="2">
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <button class="btn btn-dark">Cancel</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
    $('#submit').submit(function(){
        var getPass=document.getElementById('password').value;
        var getPass1=document.getElementById('password1').value;
        if(getPass!=getPass1){
            alert("Passwords not Matched");
            return false;
        }
        else{
            return true;
        }
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\HMS\resources\views/admin/addCollectionCenter.blade.php ENDPATH**/ ?>