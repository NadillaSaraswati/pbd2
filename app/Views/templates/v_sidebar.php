<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">
            <h1>SIPUS</h1>
        </div>
    </a>
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-text mx-3">admin </div>
    </a>


    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        <a class="nav-link" href="<?= base_url('Anggota'); ?>">
            <i class="fas fa-fw fa-list"></i>
            <span>Anggota</span></a>
        <a class="nav-link" href="<?= base_url('Buku'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Buku</span></a>
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Transaksi</span></a>
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Laporan</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->