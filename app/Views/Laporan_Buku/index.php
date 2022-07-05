<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    
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
                        <th>Perolehan</th>
                        <th>Status</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Subyek</th>
                        <th>Jenis</th>
                        <th>Judul Buku</th>
                    </tr>
                </thread>
                <tbody>
                    <?php $i=1; ?>
                    <?php  foreach($buku as $row) :?>
                    <tr>
                        <td scope="row"><?= $i; ?></td>
                        <td><?= $row['id_buku']; ?></td>
                        <td><?= $row['perolehan']; ?></td>
                        <td><?= $row['status']; ?></td>
                        <td><?= $row['nama_pengarang']; ?></td>
                        <td><?= $row['nama_penerbit']; ?></td>
                        <td><?= $row['subyek_buku']; ?></td>
                        <td><?= $row['jenis_koleksi']; ?></td>
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