<div class="post d-flex flex-column-fluid" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="card">
            <div class="card-header border-0 pt-6">
                <div class="card-title">
                    <h6>
                        <?php if($visitor->id): ?>
                            Ubah
                        <?php else: ?>
                            Tambah
                        <?php endif; ?>
                        Data Pengunjung
                    </h6>
                </div>
                <div class="card-toolbar">
                    <div class="d-flex justify-content-end">
                        <button type="button" onclick="load_list(1);" class="btn btn-sm btn-primary">Kembali</button>
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <form id="form_input">
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="required form-label">Nama</label>
                            <select data-control="select2" data-placeholder="Pilih Pengunjung" name="user_id" class="form-select form-select-solid">
                                <option SELECTED DISABLED>Pilih Nama Pengunjung</option>
                                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>" <?php echo e($visitor->user_id == $item->id ? 'selected' : ''); ?>><?php echo e($item->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="min-w-150px mt-10 text-end">
                            <?php if($visitor->id): ?>
                            <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','<?php echo e(route('web.visitor.update',$visitor->id)); ?>','PATCH');" class="btn btn-sm btn-primary">Simpan</button>
                            <?php else: ?>
                            <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','<?php echo e(route('web.visitor.store')); ?>','POST');" class="btn btn-sm btn-primary">Simpan</button>
                            <?php endif; ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
  
</script><?php /**PATH D:\KULIAH\DICODING\laragon\www\perpustakaanSDN\resources\views/pages/visitor/input.blade.php ENDPATH**/ ?>