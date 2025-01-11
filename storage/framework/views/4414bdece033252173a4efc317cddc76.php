<!-- resources/views/css/style.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My CSS Page</title>
    
    <!-- Linking to the CSS file -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <!-- This will display the content from the child view -->
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>  <!-- Content section -->
    </div>
</body>
</html>
<?php /**PATH C:\laravel-projects\blog\resources\views/css/style.blade.php ENDPATH**/ ?>