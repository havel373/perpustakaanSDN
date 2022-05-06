<?php if (isset($component)) { $__componentOriginal7b6721487b7b8dd63e67398e09f7d70f121b9aa3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AuthLayout::class, ['title' => 'Masuk']); ?>
<?php $component->withName('auth-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div id="page_login">
        <div class="w-lg-500px p-10 p-lg-15 mx-auto">
            <form class="form w-100" novalidate="novalidate" id="form_login">
                <div class="text-center mb-10">
                    <h1 class="text-dark mb-3">Masuk ke <br> <?php echo e(config('app.name')); ?></h1>
                </div>
                <div class="fv-row mb-10">
                    <label class="form-label fs-6 fw-bolder text-dark">ID</label>
                    <input class="form-control form-control-lg form-control-solid" type="text" id="userId" name="userId" data-login="1" />
                </div>
                <div class="fv-row mb-10">
                    <div class="d-flex flex-stack mb-2">
                        <label class="form-label fw-bolder text-dark fs-6 mb-0">Kata Sandi</label>
                        
                    </div>
                    <input class="form-control form-control-lg form-control-solid" type="password" id="password" name="password" data-login="2" />
                </div>
                <div class="text-center">
                    <button id="tombol_login" onclick="handle_post('#tombol_login','#form_login','<?php echo e(route('web.auth.login')); ?>');" data-login="3" class="btn btn-lg btn-primary w-100 mb-5">
                        <span class="indicator-label">Masuk</span>
                        <span class="indicator-progress">Harap tunggu...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <?php $__env->startSection('custom_js'); ?>
        <script>
            auth_content('page_login');
        </script>
    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7b6721487b7b8dd63e67398e09f7d70f121b9aa3)): ?>
<?php $component = $__componentOriginal7b6721487b7b8dd63e67398e09f7d70f121b9aa3; ?>
<?php unset($__componentOriginal7b6721487b7b8dd63e67398e09f7d70f121b9aa3); ?>
<?php endif; ?><?php /**PATH D:\KULIAH\DICODING\laragon\www\perpustakaanSDN\resources\views/pages/auth/main.blade.php ENDPATH**/ ?>