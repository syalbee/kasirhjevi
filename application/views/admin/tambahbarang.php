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
        <form id="BRGaddform">
            <div class="card-body">
                <div class="form-row">
                    <div class="col-4">
                        <label for="barcode">Barcode</label>
                        <input type="text" class="form-control" id="barcode" placeholder="Barcode" name="BRGBarcode" required>
                    </div>

                    <div class="col-4">
                        <label>Supplier</label>
                        <select class="form-control select2" style="width: 100%;" name="BRGSupplier">
                            <?php foreach ($supplier as $sup) { ?>
                                <option value="<?= $sup->kode; ?>"><?= $sup->nama; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="col-4">
                        <label>Satuan</label>
                        <select class="form-control select2" style="width: 100%;" name="BRGSatuan">
                            <?php foreach ($satuan as $sat) { ?>
                                <option value="<?= $sat->j_qty; ?>"><?= $sat->j_qty; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
 <br>
                <div class="form-group">
                    <label for="BRGNama">Nama Barang</label>
                    <input type="text" class="form-control" id="BRGNama" name="BRGNama" placeholder="Nama Barang" required>
                </div>

                <div class="form-row">
                    <div class="col-4">
                        <label for="BRGHjual">Harga Jual</label>
                        <input type="number" class="form-control" id="BRGHjual" name="BRGHjual" placeholder="Harga Jual" required>
                    </div>
                    <div class="col-4">
                        <label for="BRGHbeli">Harga Beli</label>
                        <input type="number" class="form-control" id="BRGHbeli" name="BRGHbeli" placeholder="Harga Beli" required>
                    </div>
                    <div class="col-4">
                        <label for="BRGQty">Stok/Qty</label>
                        <input type="number" class="form-control" id="BRGQty" name="BRGQty" placeholder="Stok/Qty" required>
                    </div>
                </div>
            </div>
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
<script>
    var BRGreadUrl = '<?php echo base_url('barang/read') ?>';
    var BRGlisturl = '<?php echo base_url('barang/listbarang') ?>';
    var BRGaddUrl = '<?php echo base_url('barang/add') ?>';
    var BRGremoveUrl = '<?php echo base_url('barang/delete') ?>';
    var BRGeditUrl = '<?php echo base_url('barang/edit') ?>';
    var BRGget_barangUrl = '<?php echo base_url('barang/get_barang') ?>';
</script>
<script src="<?php echo base_url('assets/js/barang.js') ?>"></script>
</body>

</html>