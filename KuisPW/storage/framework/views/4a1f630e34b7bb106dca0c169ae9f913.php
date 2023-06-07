<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PW-IBIK</title>
        <link rel="stylesheet" href="<?php echo e(url('./assets/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(url('./assets/bootstrapicons/font/bootstrap-icons.css')); ?>">
    </head>
    <body class="bg-body-tertiary">
        <header>
            <?php echo $__env->make('templates.headers.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </header>
        <main class="container-md pt-5">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
        <footer class="container mt-5">
            <p class="fs-7">KUIS TI-21-PA1</p>
        </footer>
        <script src="<?php echo e(url('./assets/js/bootstrap.bundle.min.js')); ?>"></script>
    </body>
</html><?php /**PATH C:\Users\micha\Documents\Tugas Web (non-cloud)\kuispw\resources\views/templates/layouts.blade.php ENDPATH**/ ?>