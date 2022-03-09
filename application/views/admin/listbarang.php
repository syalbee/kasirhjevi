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
            <div class="card">
                <div class="card-header">
                    <!-- <button class="btn btn-success" data-toggle="modal" data-target="#modal" onclick="add()">Tambah</button> -->
                    <a class="btn btn-success" href="<?= base_url('barang/tambahbarang'); ?>" role="button">
                        Tambah
                    </a>
                </div>
                <div class="card-body">
                    <table class="table w-100 table-bordered table-hover" id="barang">
                        <thead>
                            <tr>
                                <th>Barcode</th>
                                <th>Supplier</th>
                                <th>Nama</th>
                                <th>Satuan</th>
                                <th>Qty</th>
                                <th>H Jual</th>
                                <th>H Modal</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



<div class="modal fade" id="BRGmodaledit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Data</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="BRGformedit">
                    <input type="hidden" name="id">
                    <div class="form-group">
                        <label>Barcode</label>
                        <input type="text" class="form-control" placeholder="Barcode" name="EtBarcode" required>
                    </div>
                    <div class="form-group">
                        <label>Supplier</label>
                        <select class="form-control select2" style="width: 100%;" name="EtBRGSupplier">
                            <?php foreach ($supplier as $sup) { ?>
                                <option value="<?= $sup->kode; ?>"><?= $sup->nama; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Satuan</label>
                        <select class="form-control select2" style="width: 100%;" name="EtBRGSatuan">
                            <?php foreach ($satuan as $sat) { ?>
                                <option value="<?= $sat->j_qty; ?>"><?= $sat->j_qty; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control"  placeholder="Nama Barang" name="EtNama" required>
                    </div>
                    <div class="form-group">
                        <label>Harga Jual</label>
                        <input type="number" class="form-control" placeholder="Harga Jual" name="EtHjual" required>
                    </div>
                    <div class="form-group">
                        <label>Harga Beli</label>
                        <input type="number" class="form-control" placeholder="Harga Beli" name="EtHbeli" required>
                    </div>
                    <button class="btn btn-success" name="PLEdtbtn" type="button" onclick="editData()">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>


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
<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<!-- Select2 -->
<script src="<?= base_url(); ?>assets/plugins/select2/js/select2.full.min.js"></script>
<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    })
</script>
<script src="<?php echo base_url('assets/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
<script>
    var BRGreadUrl = '<?php echo base_url('barang/read') ?>';
    var BRGaddUrl = '<?php echo base_url('barang/add') ?>';
    var BRGremoveUrl = '<?php echo base_url('barang/delete') ?>';
    var BRGeditUrl = '<?php echo base_url('barang/edit') ?>';
    var BRGget_barangUrl = '<?php echo base_url('barang/get_barang') ?>';
    var BRGlisturl = '<?php echo base_url('barang/listbarang') ?>';
</script>
<script src="<?php echo base_url('assets/js/barang.js') ?>"></script>
</body>

</html>