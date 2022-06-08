<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <?php if(session()->get('message')) :?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        Data Anggota berhasil<strong><?=session()->getFlashdata('message');?></strong> 
    </div>
    
    <script>
        $(".alert").alert();
    </script>
    <?php endif; ?>
    

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
                        <th>Id Anggota</th>
                        <th>No Registrasi</th>
                        <th>Id Jurusan</th>
                        <th>Nama</th>
                        <th>No Induk</th>
                    </tr>
                </thread>
                <tbody>
                    <?php $i=1; ?>
                    <?php  foreach($laporan_anggota as $row) :?>
                    <tr>
                        <td scope="row"><?= $i; ?></td>
                        <td><?= $row['id_anggota']; ?></td>
                        <td><?= $row['no_registrasi']; ?></td>
                        <td><?= $row['id_jurusan']; ?></td>
                        <td><?= $row['nama_anggota']; ?></td>
                        <td><?= $row['no_induk']; ?></td>
                    </tr>
                    <?php $i++; ?>
                    <?php  endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->