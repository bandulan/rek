            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Blank Page</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="col-6 mx-auto">
                    <?php foreach ($reklame as $l) : ?>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <?= $l['nama_iklan'] ?>
                                </h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                        <i class="fas fa-times"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <?= $l['start']; ?>
                            </div>
                            <div class="card-footer">
                                <a href="<?= base_url('user/editlokasi/') ?><?= $l['id_reklame']; ?>" class="btn btn-info">Edit</a>

                            </div>

                        </div>
                    <?php endforeach; ?>
                    <!-- /.card -->
                </div>

            </section>
            <!-- /.content -->