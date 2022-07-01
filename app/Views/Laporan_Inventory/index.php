<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">(masih pakai tabel buku) <?= $judul; ?></h1>
    
    <div class="card">
        <div class="class-header">
            <!-- Button trigger modal -->
            <button onClick="window.print()" type="button" class="btn btn-primary">
                <i class="fa fa-print"> Cetak</i>
            </button>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thread>
                    <tr>
                        <th>No</th>
                        <th>Id Buku</th>
                        <th>Id Perolehan</th>
                        <th>Id Status</th>
                        <th>Id Penerbit</th>
                        <th>Id Subyek</th>
                        <th>Id Jenis</th>
                        <th>Judul Buku</th>
                    </tr>
                </thread>
                <tbody>
                    <?php $i=1; ?>
                    <?php  foreach($laporan_inventory as $row) :?>
                        <tr>
                            <td scope="row"><?= $i; ?></td>
                            <td><?= $row['id_buku']; ?></td>
                            <td><?= $row['id_perolehan']; ?></td>
                            <td><?= $row['id_status']; ?></td>
                            <td><?= $row['id_penerbit']; ?></td>
                            <td><?= $row['id_subyek']; ?></td>
                            <td><?= $row['id_jenis']; ?></td>
                            <td><?= $row['judul_buku']; ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php  endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->