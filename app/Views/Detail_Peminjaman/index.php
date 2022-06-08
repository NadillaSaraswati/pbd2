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
    Data Detail Peminjaman berhasil<strong><?=session()->getFlashdata('message');?></strong> 
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
            <th>Id Peminjaman</th>
            <th>Id Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Pengembalian</th>
          </tr>
        </thread>

        <tbody>
          <?php $i=1; ?>
          <?php  foreach($detail_peminjaman as $row) :?>
          <tr>
            <td scope="row"><?= $i; ?></td>
            <td><?= $row['id_peminjaman']; ?></td>
            <td><?= $row['id_buku']; ?></td>
            <td><?= $row['tanggal_pinjam']; ?></td>
            <td><?= $row['tanggal_pengembalian']; ?></td>
          </tr>
          <?php $i++; ?>
          <?php  endforeach;?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- /.container-fluid -->