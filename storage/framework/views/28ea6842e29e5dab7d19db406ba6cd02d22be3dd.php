

<?php $__env->startSection('page-content'); ?>
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
    <section id="my_appointment" class="my_appointment">
        <div class="section-title">
            <h2>My Appointments</h2>
        </div>
        <!-- Table -->
        <div class="container">
                <div class="row">
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Patient Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Message Status</th>
                        <th scope="col">Delete Appointments</th>
                        <th scope="col">See Lab Report</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 1; ?>
                        <?php $__currentLoopData = $appoints; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appoint): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo $count; ?></th>
                            <td><?php echo e($appoint->name); ?></td>
                            <td><?php echo e($appoint->date); ?></td>
                            <td><span class="badge bg-success"><?php echo e($appoint->status); ?></span></td>
                            <td>
                                <form action="<?php echo e(url('deleteappointment',$appoint->id)); ?>" method="post" onclick="return deleteconfirm('<?php echo e($appoint->name); ?>','<?php echo e($appoint->date); ?>');">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Cancel</button>
                                </form>
                            </td>
                            <td>
                                <button class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
                            </td>
                        </tr>
                        <?php $count++; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
                </div>
            </div>
        <!-- Table -->
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-script'); ?>
<script>
      function deleteconfirm(name,scedule){
          $getcnf=confirm("Are You Sure to delete the appointment "+name+" Scedule On "+scedule);
          if($getcnf==true){
              return true;
          }
          else{
              return false;
          }
      }
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\HMS\resources\views/user/my_appointment.blade.php ENDPATH**/ ?>