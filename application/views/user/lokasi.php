            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-8 col-lg-10">
                            <h1><?= $title; ?></h1>
                        </div>
                        <div class="col-4 col-lg-2">
                            <a href="<?= base_url('user/tambahlokasi'); ?>" class="btn btn-info btn-sm float-right">Add Location</a>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="col-lg-6 col-12 mx-auto">
                    <?php foreach ($lokasi as $l) : ?>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <?= $l['nama_lok'] ?>
                                </h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                        <i class="fas fa-times"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <?= $l['alamat_lok']; ?>
                            </div>
                            <div class="card-footer">
                                <a href="<?= base_url('user/editlokasi/') ?><?= $l['id_lokasi']; ?>" class="btn btn-info">Edit</a>
                                <a href="<?= base_url('user/tambahreklame/') ?><?= $l['id_lokasi']; ?>" class="btn btn-info">Add Reklame</a>
                            </div>

                        </div>
                    <?php endforeach; ?>
                    <!-- /.card -->
                </div>

            </section>
            <!-- /.content -->