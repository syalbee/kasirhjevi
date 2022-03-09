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

                <div class="form-group">
                    <label for="PLKodec">Kode</label>
                    <input type="hidden" name="PLKode" value="<?= $kodeplg; ?>">
                    <input type="text" value="<?= $kodeplg; ?>" class="form-control" id="PLKodec" disabled>
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