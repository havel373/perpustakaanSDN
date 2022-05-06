<div class="post d-flex flex-column-fluid" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="card">
            <form id="content_filter">
                <div class="card-header border-0 pt-6">
                    <div class="card-toolbar">
                        <div class="d-flex justify-content-end">
                            <button type="button" onclick="load_list(1);" class="btn btn-sm btn-primary">Kembali</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="card-body pt-0">
                <div class="col-12 mb-5 mt-5">
                    <center>
                        <figure class="figure">
                                <div class="figure-img">
                                <img src="<?php echo e($data->image); ?>" class="figure-img img-fluid" style="max-width:250px; height:250px;">
                                </div>
                            <figcaption class="figure-caption text-center">
                                <h6><?php echo e($data->name); ?></h6>
                                <h6><i><?php echo e($data->type); ?></i></h6>
                                <p><?php echo e($data->description); ?><p>
                            </figcaption>
                        </figure>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\laragon\www\perpustakaanSDN\resources\views/pages/book/detail.blade.php ENDPATH**/ ?>