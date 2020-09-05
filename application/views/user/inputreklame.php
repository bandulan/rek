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
                    <label for="alamat">Alamat Lokasi</label>
                    <input type="text" class="form-control" id="alamat_lok" name="alamat_lok" value="<?= $lokasi['alamat_lok']; ?>" readonly>

                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="id_penyewa" name="id_penyewa" value="<?= $user['id_user']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nama_iklan">Nama Iklan</label>
                    <input type="text" class="form-control" id="nama_iklan" name="nama_iklan">
                    <?= form_error('nama_iklan', '<small class="text-sm text-danger mt-2 mb-3" role="alert">', '</small>'); ?>

                </div>
                <div class="form-group">
                    <label for="start">Tanggal Mulai Sewa </label>
                    <input type="date" class="form-control" id="start" name="start" required>
                </div>
                <div class="form-group">
                    <label for="end">Tanggal Selesai </label>
                    <input type="date" class="form-control" id="end" name="end" required>
                </div>
            </div>

            <div class="card-footer">
                <div class="row">
                    <button type="submit" class="btn btn-info mx-auto">Submit</button></div>
            </div>
        </form>
    </div>
</div>