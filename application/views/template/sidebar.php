<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            <a href="#" class="d-block"><?= $nama; ?></a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-cash-register"></i>
                    <p>
                        Transaksi
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?= base_url(); ?>assets/index.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Dashboard v1</p>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-shopping-cart"></i>
                    <p>
                        Belanja
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?= base_url(); ?>assets/index.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Dashboard v1</p>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Pelanggan
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?= base_url('pelanggan/tambahpelanggan'); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tambah Pelanggan</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?= base_url('pelanggan/listpelanggan'); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List Pelanggan</p>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-boxes"></i>
                    <p>
                        Barang
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?= base_url('barang/tambahbarang'); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tambah Barang</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('barang/listbarang'); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List Barang</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('barang/pbarang'); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pengaturan Barang</p>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-people-arrows"></i>
                    <p>
                        Supplier
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?= base_url('supplier/tambahsupplier'); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tambah Supplier</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?= base_url('supplier/listsupplier'); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List Supplier</p>
                        </a>
                    </li>

                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>