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
                        Data Anggota
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
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Anggota..." value="<?php echo e($data->name); ?>">
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="required form-label">ID</label>
                            <input type="text" class="form-control" id="id_user" name="id_user" placeholder="Masukkan ID Anggota..." value="<?php echo e($data->userId); ?>">
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="required form-label">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="male" <?php echo e($data->gender=="male"?"selected":""); ?>>Laki - Laki</option>
                                <option value="female" <?php echo e($data->gender=="female"?"selected":""); ?>>Perempuan</option>
                            </select>
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email Anggota..." value="<?php echo e($data->email); ?>">
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat Anggota..." value="<?php echo e($data->address); ?>">
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="required form-label">Hak Akses</label>
                            <select class="form-control" id="hak_akses" name="hak_akses">
                                <option value="">Pilih Hak Akses</option>
                                <option value="kepsek" <?php echo e($data->role=="kepsek"?"selected":""); ?>>Kepala Sekolah</option>
                                <option value="siswa" <?php echo e($data->role=="siswa"?"selected":""); ?>>Siswa</option>
                                <option value="admin" <?php echo e($data->role=="admin"?"selected":""); ?>>Admin</option>
                            </select>
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="<?php echo e(($data->id) ?'' : 'required'); ?> form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="kata_sandi" name="kata_sandi" placeholder="Masukkan Kata Sandi Anggota...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="min-w-150px mt-10 text-end">
                            <?php if($data->id): ?>
                            <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','<?php echo e(route('web.member.update',$data->id)); ?>','PATCH');" class="btn btn-sm btn-primary">Simpan</button>
                            <?php else: ?>
                            <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','<?php echo e(route('web.member.store')); ?>','POST');" class="btn btn-sm btn-primary">Simpan</button>
                            <?php endif; ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
  
</script><?php /**PATH D:\KULIAH\DICODING\laragon\www\perpustakaanSDN\resources\views/pages/member/input.blade.php ENDPATH**/ ?>