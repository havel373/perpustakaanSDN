<div class="post d-flex flex-column-fluid" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="card">
            <div class="card-header border-0 pt-6">
                <div class="card-title">
                    <h6>
                        <?php if($data->id): ?>
                            Ubah
                        <?php else: ?>
                            Tambah
                        <?php endif; ?>
                        Data Buku
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
                            <label for="condition" class="required form-label">Nama Buku</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Buku..." value="<?php echo e($data->name); ?>">
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="required form-label">Judul Buku</label>
                            <input type="text" class="form-control" id="type" name="type" placeholder="Masukkan Judul Buku..." value="<?php echo e($data->type); ?>">
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="required form-label">Tahun Terbit</label>
                            <input type="text" class="form-control" id="year_release" name="year_release" placeholder="Masukkan Tahun Terbit..." value="<?php echo e($data->year_release); ?>">
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="required form-label">Gambar Buku</label>
                            <input type="file" class="form-control" id="image" name="image" placeholder="Masukkan Tahun Terbit..." value="<?php echo e($data->image); ?>">
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="required form-label">Penerbit</label>
                            <input type="text" class="form-control" id="publisher" name="publisher" placeholder="Masukkan Penerbit..." value="<?php echo e($data->publisher); ?>">
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="required form-label">Deskripsi Buku</label>
                            <input type="text" class="form-control" id="description" name="description" placeholder="Masukkan Deskripsi Buku..." value="<?php echo e($data->description); ?>">
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="required form-label">Banyak Buku</label>
                            <input type="number" class="form-control" id="qty" name="qty" placeholder="Masukkan Jumlah buku..." value="<?php echo e($data->qty); ?>">
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="required form-label">Nomor Buku</label>
                            <input type="text" class="form-control" id="number" name="number" placeholder="Masukkan nomor buku..." value="<?php echo e($data->number); ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="min-w-150px mt-10 text-end">
                            <?php if($data->id): ?>
                            <button type="button" onclick="load_list(1);" class="btn btn-sm btn-danger">Tidak Setuju</button>
                            <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','<?php echo e(route('web.book.update',$data->id)); ?>','PATCH');" class="btn btn-sm btn-primary">Setuju</button>
                            <?php else: ?>
                            <button type="button" onclick="load_list(1);" class="btn btn-sm btn-danger">Tidak Setuju</button>
                            <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','<?php echo e(route('web.book.store')); ?>','POST');" class="btn btn-sm btn-primary">Setuju</button>
                            <?php endif; ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
  
</script><?php /**PATH D:\KULIAH\DICODING\laragon\www\perpustakaanSDN\resources\views/pages/book/input.blade.php ENDPATH**/ ?>