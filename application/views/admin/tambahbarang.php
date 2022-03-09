<style type="text/css">
    body {
        font-family: Arail, sans-serif;
    }

    /* Formatting search box */
    .search-box {
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }

    .search-box input[type="text"] {
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }

    .result {
        position: absolute;
        z-index: 999;
        top: 100%;
        left: 0;
    }

    .search-box input[type="text"],
    .result {
        width: 100%;
        box-sizing: border-box;
    }

    /* Formatting result items */
    .result p {
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }

    .result p:hover {
        background: #f2f2f2;
    }
</style>

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
        <form id="PLaddform">
            <div class="card-body">

                <div class="form-row">
                    <div class="col-6">
                        <label for="BRGKode">Kode Barang</label>
                        <input type="text" class="form-control" value="<?= $kodebarang; ?>" id="BRGKode" name="BRGKode" disabled>
                    </div>
                    <div class="col-6">
                        <div class="search-box">

                            <input type="text" id="search" autocomplete="off" name="spousename" placeholder="search spouse" />
                            <input type="hidden" id="id" autocomplete="off" name="spouseid" placeholder="search spouse" />
                            <input class="w3-button w3-block w3-green w3-section w3-padding" type="submit" name="access"><b>Submit</b></button>
                            <div class="result"></div>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="PLNama">Nama</label>
                    <input type="text" class="form-control" id="PLNama" name="PLNama" placeholder="Nama" required>
                </div>

                <div class="form-group">
                    <label for="PLAlamat">Alamat</label>
                    <input type="text" class="form-control" id="PLAlamat" name="PLAlamat" placeholder="Alamat" required>
                </div>

                <div class="form-row">
                    <div class="col-6">
                        <label for="PLNohp">Nomor Telpon</label>
                        <input type="text" class="form-control" id="PLNohp" name="PLNohp" placeholder="Nomber Telpon" required>
                    </div>
                    <div class="col-6">
                        <label for="PLNik">NIK</label>
                        <input type="text" class="form-control" id="PLNik" name="PLNik" placeholder="NIK">
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="button" onclick="addData()" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0-rc
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url('assets/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>

<script>
    var PLreadUrl = '<?php echo base_url('pelanggan/read') ?>';
    var PLlisturl = '<?php echo base_url('pelanggan/listpelanggan') ?>';
    var PLaddUrl = '<?php echo base_url('pelanggan/add') ?>';
    var PLremoveUrl = '<?php echo base_url('pelanggan/delete') ?>';
    var PLeditUrl = '<?php echo base_url('pelanggan/edit') ?>';
    var PLget_pelangganUrl = '<?php echo base_url('pelanggan/get_pelanggan') ?>';
</script>
<script src="<?php echo base_url('assets/js/pelanggan.js') ?>"></script>
</body>

</html>