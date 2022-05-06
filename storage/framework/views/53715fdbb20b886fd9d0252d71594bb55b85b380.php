<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('theme.web.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body id="kt_body" class="header-tablet-and-mobile-fixed aside-enabled">
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            <?php echo $__env->make('theme.web.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <?php echo $__env->make('theme.web.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <?php echo e($slot); ?>

                </div>
                <?php echo $__env->make('theme.web.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
    <?php echo $__env->make('theme.web.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('custom_js'); ?>
</body>
</html><?php /**PATH D:\KULIAH\DICODING\laragon\www\perpustakaanSDN\resources\views/theme/web/index.blade.php ENDPATH**/ ?>