            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1><?= $title; ?></h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <div class="col-12 mx-auto">

                <div id="googleMap"></div>
            </div>
            <br>


            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="col-10 col-lg-5 mx-auto">
                    <?php foreach ($lokasi as $l) : ?>

                        <div class="card mb-3">
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
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-2">
                                        <a href="#" class="btn btn-info">Detail</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->