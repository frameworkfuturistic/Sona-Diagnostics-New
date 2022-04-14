

<?php $__env->startSection('mycss'); ?>
<link rel="stylesheet" href="admin/assets/css/dataTables.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Appointment's Report</h4>
        <p></p>
        <div class="table-responsive">
            <table class="table table-hover" id="dataTable">
                <thead>
                    <tr>
                        <th colspan="2">Action</th>
                        <th>Mail</th>
                        <th>Status</th>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>TestGroup</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td colspan="2"> 
                                <button class="btn btn-success btn-sm" onclick="window.location.href='approve_patient/<?php echo e($appointment->id); ?>'">Approve</button>
                                <button class="btn btn-danger btn-sm" onclick="window.location.href='cancel_patient/<?php echo e($appointment->id); ?>'">Cancel</button>
                            </td>
                            <td>
                                <button class="btn btn-info btn-warning" onclick="window.location.href='mail_patient/<?php echo e($appointment->id); ?>'"><i class="mdi mdi-mail"></i></button>
                            </td>
                            <td><span class="badge badge-info badge-pill"><?php echo e($appointment->status); ?></span></td>
                            <td><?php echo e($appointment->name); ?></td>
                            <td><?php echo e($appointment->email); ?></td>
                            <td><?php echo e($appointment->phone); ?></td>
                            <td><?php echo e($appointment->testGroup); ?></td>
                            <td><?php echo e($appointment->date); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="admin/assets/js/dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    } );
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\HMS\resources\views/admin/view_appointment.blade.php ENDPATH**/ ?>