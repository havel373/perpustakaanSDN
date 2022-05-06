<?php if (isset($component)) { $__componentOriginal4f561617d80b81635ce1c372fc1de3f039937f48 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\WebLayout::class, ['title' => 'Dashboard']); ?>
<?php $component->withName('web-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4f561617d80b81635ce1c372fc1de3f039937f48)): ?>
<?php $component = $__componentOriginal4f561617d80b81635ce1c372fc1de3f039937f48; ?>
<?php unset($__componentOriginal4f561617d80b81635ce1c372fc1de3f039937f48); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\perpustakaanSDN\resources\views/pages/dashboard/main.blade.php ENDPATH**/ ?>