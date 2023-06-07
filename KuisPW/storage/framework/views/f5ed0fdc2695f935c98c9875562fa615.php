
<?php $__env->startSection('content'); ?>
 <div class="d-flex align-items-center p-3 my-3 text-white bg-primary
rounded shadow-sm">
    <img class="me-3" src="<?php echo e(url('./assets/media/icons/iconibik.png')); ?>" alt="icon-ibik"
    width="45" height="45">
    <div class="lh-1">
        <h1 class="h6 mb-0 text-white lh-1">Kuis</h1>
        <small>7-6-2023</small>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Profile</h3>
    </div>
    <div class="card-body">
   <table class="table">
        <tr>
            <td>Nama</td>
            <td>NPM</td>
            <td>Tanggal Lahir</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
        </tr>
        <?php $__currentLoopData = $profiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($profile->nama); ?></td>
            <td><?php echo e($profile->npm); ?></td>
            <td><?php echo e($profile->tgl); ?></td>
            <td><?php echo e($profile->jeniskelamin); ?></td>
            <td><?php echo e($profile->alamat); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\micha\Documents\Tugas Web (non-cloud)\kuispw\resources\views/profile.blade.php ENDPATH**/ ?>