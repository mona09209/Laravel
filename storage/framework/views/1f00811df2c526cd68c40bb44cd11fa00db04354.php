<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
       <h3><?php echo e($obj -> name); ?>  <?php echo e($obj -> age); ?> <?php echo e($obj -> gender); ?></h3>
    </body>
</html>
<?php /**PATH E:\xampp\htdocs\Moon\resources\views/welcome.blade.php ENDPATH**/ ?>