<?php if($paginator->hasPages()): ?>
<div class="d-flex flex-row flex-column-fluid">
    <div class="d-flex flex-row-fluid flex-center">
        <ul class="pagination pagination-circle pagination-outline">
            <?php if($paginator->onFirstPage()): ?>
            <?php else: ?>
            <li class="page-item previous m-1">
                <a href="javascript:;" class="page-link paginasi" halaman="<?php echo e($paginator->previousPageUrl()); ?>">
                    <i class="previous"></i>
                </a>
            </li>
            <?php endif; ?>
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(is_string($element)): ?>
                <li class="page-item disabled m-1">
                    <a href="javascript:;" class="page-link">...</a>
                </li>
                <?php endif; ?>
                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($page == $paginator->currentPage()): ?>
                        <li class="page-item active m-1">
                            <a href="javascript:;" class="page-link"><?php echo e($page); ?></a>
                        </li>
                        <?php else: ?>
                        <li class="page-item m-1">
                            <a href="javascript:;" halaman="<?php echo e($url); ?>" class="page-link paginasi"><?php echo e($page); ?></a>
                        </li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php if($paginator->hasMorePages()): ?>
            <li class="page-item next m-1">
                <a href="javascript:;" halaman="<?php echo e($paginator->nextPageUrl()); ?>" class="page-link paginasi">
                    <i class="next"></i>
                </a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</div>
<?php endif; ?><?php /**PATH D:\KULIAH\DICODING\laragon\www\perpustakaanSDN\resources\views/theme/web/pagination.blade.php ENDPATH**/ ?>