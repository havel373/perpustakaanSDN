<div class="post d-flex flex-column-fluid" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="card">
            <div class="card-header border-0 pt-6">
                <div class="card-title">
                    <h6>
                        @if ($data->id)
                            Ubah
                        @else
                            Tambah
                        @endif
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
                            <label for="condition" class="required form-label">Judul Buku</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Buku..." value="{{ $data->name }}">
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="required form-label">Jenis Buku</label>
                            <input type="text" class="form-control" id="type" name="type" placeholder="Masukkan Judul Buku..." value="{{ $data->type }}">
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="required form-label">Tahun Terbit</label>
                            <input type="date" class="form-control" id="year_release" name="year_release" placeholder="Masukkan Tahun Terbit..." value="{{ $data->year_release }}">
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="required form-label">Gambar Buku</label>
                            <input type="file" class="form-control" id="image" name="image" placeholder="Masukkan Tahun Terbit...">
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="required form-label">Penerbit</label>
                            <input type="text" class="form-control" id="publisher" name="publisher" placeholder="Masukkan Penerbit..." value="{{ $data->publisher }}">
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="required form-label">Deskripsi Buku</label>
                            <textarea class="form-control" id="description" name="description" placeholder="Masukkan Deskripsi Buku...">{{ $data->description }}</textarea>
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="required form-label">Banyak Buku</label>
                            <input type="tel" class="form-control" id="qty" name="qty" placeholder="Masukkan Jumlah buku..." value="{{ $data->qty }}">
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label for="condition" class="required form-label">Nomor Buku</label>
                            <input type="text" class="form-control" id="number" name="number" placeholder="Masukkan nomor buku..." value="{{ $data->number }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="min-w-150px mt-10 text-end">
                            @if(Auth::user()->role == 'admin')
                                @if ($data->id)
                                    <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','{{route('web.book.update',$data->id)}}','PATCH');" class="btn btn-sm btn-primary">Ubah Buku</button>
                                @else
                                    <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','{{route('web.book.store')}}','POST');" class="btn btn-sm btn-primary">Simpan Buku</button>
                                @endif
                            @elseif(Auth::user()->role == 'kepsek')
                                <button id="tombol_simpan" type="button" onclick="handle_patch('{{route('web.book.accept',$data->id)}}');" class="btn btn-sm btn-primary">Terima / Setuju</button>
                                <button id="tombol_simpan" type="button" onclick="handle_patch('{{route('web.book.decline',$data->id)}}');" class="btn btn-sm btn-info">Tolak / Tidak Setuju</button>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
  number_only('qty');
</script>