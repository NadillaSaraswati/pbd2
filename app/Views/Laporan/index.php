<!-- Begin Page Content -->
<div class="container-fluid">
    
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <a class="nav-link" href="<?= base_url('Laporan_Anggota'); ?>">
        <h5>
            <i class="fas fa-fw fa-address-card"></i>
            Anggota
        </h5>
    </a>

    <a class="nav-link" href="<?= base_url('Laporan_Buku'); ?>">
        <h5>
            <i class="fas fa-fw fa-book"></i>
            Buku
        </h5>
    </a>

    <a class="nav-link" href="<?= base_url('Laporan_Peminjaman'); ?>">
        <h5>
            <i class="fas fa-fw fa-arrow-right"></i>
            Peminjaman
        </h5>
    </a>

    <a class="nav-link" href="<?= base_url('Laporan_Pengembalian'); ?>">
        <h5>
            <i class="fas fa-fw fa-arrow-left"></i>
            Pengembalian
        </h5>
    </a>
</div>