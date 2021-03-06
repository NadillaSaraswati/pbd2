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
            <th>Id Pengembalian</th>
            <th>Id Anggota</th>
            <th>Id User</th>
            <th>Id Peminjaman</th>
            <th>Keterangan</th>
            <th>Tanggal Dikembalikan</th>
          </tr>
        </thread>

        <tbody>
          <?php $i=1; ?>
          <?php  foreach($pengembalian as $row) :?>
          <tr>
            <td scope="row"><?= $i; ?></td>
            <td><?= $row['id_pengembalian']; ?></td>
            <td><?= $row['id_anggota']; ?></td>
            <td><?= $row['id_user']; ?></td>
            <td><?= $row['id_peminjaman']; ?></td>
            <td><?= $row['keterangan']; ?></td>
            <td><?= $row['tanggal_dikembalikan']; ?></td>
          </tr>
          <?php $i++; ?>
          <?php  endforeach;?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- /.container-fluid -->