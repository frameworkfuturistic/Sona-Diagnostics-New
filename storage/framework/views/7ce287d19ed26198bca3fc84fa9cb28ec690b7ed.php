

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
        <h4 class="card-title">Doctor's Report</h4>
        </p>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Speciality</th>
                        <th>Room No.</th>
                        <th>Image</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($doctor->name); ?></td>
                        <td><?php echo e($doctor->phone); ?></td>
                        <td><?php echo e($doctor->speciality); ?></td>
                        <td><?php echo e($doctor->room); ?></td>
                        <td><img src="doctorimage/<?php echo e($doctor->img); ?>" alt="doctor"></td>
                        <td>
                            <button id="<?php echo e($doctor->id); ?>" class="btn btn-success btn-sm" onclick="window.location.href='update_doctor/<?php echo e($doctor->id); ?>'"><i class="mdi mdi-border-color"></i> Edit</button>

                        </td>
                        <td>
                        <form action="<?php echo e(url('delete_doctor/'.$doctor->id)); ?>" method="post" onclick="return deleteconfirm('<?php echo e($doctor->name); ?>');">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <button class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
    function deleteconfirm(name){
        $cnf=confirm("Are you sure to delete the doctor "+ name );
        if($cnf==true){
            return true;
        }
        else{
            return false;
        }
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\HMS\resources\views/admin/show_doctor.blade.php ENDPATH**/ ?>