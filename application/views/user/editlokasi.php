<br>
<div class="col-5 mx-auto">

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Edit Lokasi</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="">
            <div class="card-body">
                <div class="form-group">
                    <label for="email">Nama</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $lokasi['nama_lok']; ?>">
                </div>
                <div class="form-group">
                    <label for="phone">Alamat</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="<?= $lokasi['alamat_lok']; ?>">
                </div>
            </div>

            <div class="card-footer">
                <div class="row">
                    <button type="submit" class="btn btn-info mx-auto">Edit Profile</button></div>
            </div>
        </form>
    </div>
</div>