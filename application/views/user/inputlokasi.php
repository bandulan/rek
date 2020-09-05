<br>
<div class="col-5 mx-auto">

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Input Lokasi</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="">
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama_lok" name="nama_lok">
                    <?= form_error('nama', '<small class="text-sm text-danger mt-2 mb-3" role="alert">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat_lok" name="alamat_lok">
                    <?= form_error('alamat', '<small class="text-sm text-danger mt-2 mb-3" role="alert">', '</small>'); ?>
                </div>
            </div>

            <div class="card-footer">
                <div class="row">
                    <button type="submit" class="btn btn-info mx-auto">Submit</button></div>
            </div>
        </form>
    </div>
</div>