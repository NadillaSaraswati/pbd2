<!-- Begin Page Content -->
<div class="container-fluid">
    
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <a class="nav-link" href="<?= base_url('Laporan_Anggota'); ?>">
        <i class="fas fa-fw fa-address-card"></i>
        <span>Anggota</span>
    </a>

    <a class="nav-link" href="<?= base_url('Laporan_Buku'); ?>">
        <i class="fas fa-fw fa-book"></i>
        <span>Buku</span>
    </a>

    <a class="nav-link" href="<?= base_url('Laporan_Peminjaman'); ?>">
        <i class="fas fa-fw fa-arrow-right"></i>
        <span>Peminjaman</span>
    </a>

    <a class="nav-link" href="<?= base_url('Laporan_Pengembalian'); ?>">
        <i class="fas fa-fw fa-arrow-left"></i>    
        <span>Pengembalian</span>
    </a>
</div>