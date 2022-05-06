<?php if (isset($component)) { $__componentOriginal4f561617d80b81635ce1c372fc1de3f039937f48 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\WebLayout::class, ['title' => 'Data Pengunjung']); ?>
<?php $component->withName('web-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div id="content_list">
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                <div class="card">
                    <form id="content_filter">
                        <div class="card-header border-0 pt-6">
                            <div class="card-title">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                                        </svg>
                                    </span>
                                    <input type="text" name="keywords" onkeyup="load_list(1);" class="form-control form-control-solid w-250px ps-15" placeholder="Cari data..." />
                                </div>
                            </div>
                            <div class="card-toolbar">
                                <div class="d-flex justify-content-end">
                                    <button type="button" onclick="load_input('<?php echo e(route('web.visitor.create')); ?>');" class="btn btn-sm btn-primary">Tambah Data</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <div id="list_result"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content_input"></div>
    <?php $__env->startSection('custom_js'); ?>
        <script>
            load_list(1);
        </script>
    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4f561617d80b81635ce1c372fc1de3f039937f48)): ?>
<?php $component = $__componentOriginal4f561617d80b81635ce1c372fc1de3f039937f48; ?>
<?php unset($__componentOriginal4f561617d80b81635ce1c372fc1de3f039937f48); ?>
<?php endif; ?><?php /**PATH D:\KULIAH\DICODING\laragon\www\perpustakaanSDN\resources\views/pages/visitor/main.blade.php ENDPATH**/ ?>