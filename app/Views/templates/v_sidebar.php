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
    <a href ="<?= base_url('Profile'); ?>" class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-text mx-3"> 
            <?php if (session()->get('kode_akses')=='a21cd'){
                echo 'Admin';
            } else if (session()->get('kode_akses')=='b21cd'){
                echo 'Sirkulasi';
            } else{
                echo 'Pengolahan';
            } ?></div>
    </a>


    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        
        <?php if (session()->get('kode_akses') == 'a21cd') { ?>
        <a class="nav-link" href="<?= base_url('Anggota'); ?>">
            <i class="fas fa-fw fa-address-card"></i>
            <span>Anggota</span></a>
            <?php } ?>
        
        <?php if (session()->get('kode_akses') == 'a21cd' || session()->get('kode_akses') == 'c21cd') { ?>
        <a class="nav-link" href="<?= base_url('Buku'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Buku</span></a>
            <?php } ?>

        <?php if (session()->get('kode_akses') == 'a21cd' || session()->get('kode_akses') == 'b21cd') { ?>
        <a class="nav-link" href="<?= base_url('Transaksi'); ?>">
            <i class="fas fa-fw fa-tag"></i>
            <span>Transaksi</span></a>
            <?php } ?>

        <a class="nav-link" href="<?= base_url('Laporan'); ?>">
            <i class="fas fa-fw fa-file"></i>
            <span>Laporan</span></a>

        <?php if (session()->get('kode_akses') == 'a21cd') { ?>
        <a class="nav-link" href="<?= base_url('user'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>User</span></a>
            <?php } ?>

        <a class="nav-link" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->