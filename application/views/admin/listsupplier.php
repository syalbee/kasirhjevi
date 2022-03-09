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
                    <a class="btn btn-success" href="<?= base_url('supplier/tambahsupplier'); ?>" role="button">
                        Tambah
                    </a>
                </div>
                <div class="card-body">
                    <table class="table w-100 table-bordered table-hover" id="supplier">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
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



<div class="modal fade" id="SPmodaledit">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title">Add Data</h5>
    <button class="close" data-dismiss="modal">
      <span>&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <form id="SPformedit">
      <input type="hidden" name="id">
      <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" placeholder="Nama" name="nama" required>
      </div>
      <div class="form-group">
        <label>Alamat</label>
        <input type="text" class="form-control" placeholder="Alamat" name="alamat" required>
      </div>
      <div class="form-group">
        <label>Telepon</label>
        <input type="text" class="form-control" placeholder="Telepon" name="telepon" required>
      </div>
      <button class="btn btn-success" name="SPEdtbtn" type="button" onclick="editData()">Edit</button>
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

<script src="<?php echo base_url('assets/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
<script>
    var SPreadUrl = '<?php echo base_url('supplier/read') ?>';
    var SPaddUrl = '<?php echo base_url('supplier/add') ?>';
    var SPremoveUrl = '<?php echo base_url('supplier/delete') ?>';
    var SPeditUrl = '<?php echo base_url('supplier/edit') ?>';
    var SPget_supplierUrl = '<?php echo base_url('supplier/get_supplier') ?>';
    var SPlisturl = '<?php echo base_url('supplier/listsupplier') ?>';
</script>
<script src="<?php echo base_url('assets/js/supplier.js') ?>"></script>
</body>

</html>