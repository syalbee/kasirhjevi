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
        <form id="SPaddform">
            <div class="card-body">

                <div class="form-group">
                    <label for="SPNama">Nama</label>
                    <input type="text" class="form-control" id="SPNama" name="SPNama" placeholder="Nama" required>
                </div>

                <div class="form-group">
                    <label for="SPAlamat">Alamat</label>
                    <input type="text" class="form-control" id="SPAlamat" name="SPAlamat" placeholder="Alamat" required>
                </div>
                <div class="form-row">
                    <div class="col-6">
                        <label for="SPNohp">Nomor Telpon</label>
                        <input type="text" class="form-control" id="SPNohp" name="SPNohp" placeholder="Nomber Telpon" required>
                    </div>
                    <div class="col-6">
                        <label for="SPKodec">Kode</label>
                        <input type="hidden" name="SPKode" value="<?= $kodesup; ?>">
                        <input type="text" value="<?= $kodesup; ?>" class="form-control" id="SPKodec" disabled>
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
    var SPreadUrl = '<?php echo base_url('supplier/read') ?>';
    var SPlisturl = '<?php echo base_url('supplier/listsupplier') ?>';
    var SPaddUrl = '<?php echo base_url('supplier/add') ?>';
    var SPremoveUrl = '<?php echo base_url('supplier/delete') ?>';
    var SPeditUrl = '<?php echo base_url('supplier/edit') ?>';
    var SPget_supplierUrl = '<?php echo base_url('supplier/get_supplier') ?>';
</script>
<script src="<?php echo base_url('assets/js/supplier.js') ?>"></script>
</body>

</html>