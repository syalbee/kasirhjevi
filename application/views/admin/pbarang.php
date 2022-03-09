<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
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

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <!-- left column -->
                <div class="col-md-5">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Masukan Satuan Kuantitas</h3>
                        </div>
                        <!-- /.card-header -->

                        <!-- form start -->
                        <form method="POST" action="<?= base_url('barang/addqty'); ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="BRQtyadd">Jenis Kuantitas</label>
                                    <input type="text" class="form-control" id="BRQtyadd" name="BRQtyadd" placeholder="Masukan Jenis Kuantitas">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--/.col (left) -->

                <!-- right column -->
                <div class="col-md-7">
                    <!-- Form Element sizes -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">List Nama Kuantitas</h3>
                        </div>

                        <div class="card-body table-responsive p-0" style="height: 300px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $iterasi = 0;
                                    foreach ($listpbarang->result() as $list) {
                                        $iterasi++;
                                    ?>
                                        <tr>
                                            <td><span class="tag tag-success"><?= $iterasi; ?></span></td>
                                            <td><?= $list->j_qty; ?> </td>
                                            <td>
                                                <form action="<?= base_url('barang/removeqty'); ?>" method="POST">
                                                    <input type="hidden" value="<?= $list->id; ?>" name="btnrqty">
                                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->