<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
  <?php if (session()->get('message')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      Data User berhasil<strong><?= session()->getFlashdata('message'); ?></strong>
    </div>

    <script>
      $(".alert").alert();
    </script>
  <?php endif; ?>

  <div class="card">
    <div class="class-header">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
        <i class="fa fa-plus">Tambah Data</i>
      </button>


    </div>

    <div class="card-body">
      <table class="table table-striped">
        <thread>
          <tr>
            <th>No</th>
            <th>Id User</th>
            <th>Kode Akses</th>
            <th>Password User</th>
            <th>Nama User</th>
            <th>Telepon User</th>
            <th>Alamat User</th>
            <th>Opsi</th>
          </tr>
        </thread>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($user as $row) : ?>
            <tr>
              <td scope="row"><?= $i; ?></td>
              <td><?= $row['id_user']; ?></td>
              <td><?= $row['kode_akses']; ?></td>
              <td><?= $row['pass_user']; ?></td>
              <td><?= $row['nama_user']; ?></td>
              <td><?= $row['telepon_user']; ?></td>
              <td><?= $row['alamat_user']; ?></td>
              <td>
                <button type="button" data-toggle="modal" data-target="#modalUbah" id="btn-edit" class="btn btn-warning" data-id_user="<?= $row['id_user']; ?>" data-kode_akses="<?= $row['kode_akses']; ?>" data-pass_user="<?= $row['pass_user']; ?>" data-nama_user="<?= $row['nama_user']; ?>" data-telepon_user="<?= $row['telepon_user']; ?>" data-alamat_user="<?= $row['alamat_user']; ?>"> <i class="fa fa-edit"></i> </button>
                <button type="button" data-toggle="modal" data-target="#modalHapus" id="btn-hapus" class="btn btn-danger" data-id_user="<?= $row['id_user']; ?>">
                  <i class="fa fa-trash-alt"></i> </button>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah <?= $judul; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('user/tambah'); ?>" method="post">
          <div class="form-group ab-0 ab-0">
            <label for="id_user"></label>
            <input type="text" name="id_user" id="id_user" class="form-control" placeholder="Masukkan Id User">
          </div>
          <div class="form-group ab-0">
            <label for="kode_akses"></label>
            <input type="text" name="kode_akses" id="kode_akses" class="form-control" placeholder="Masukkan Kode Akses">
          </div>
          <div class="form-group ab-0">
            <label for="pass_user"></label>
            <input type="text" name="pass_user" id="pass_user" class="form-control" placeholder="Masukkan Password User">
          </div>
          <div class="form-group ab-0">
            <label for="nama_user"></label>
            <input type="text" name="nama_user" id="nama_user" class="form-control" placeholder="Masukkan Id Nama User">
          </div>
          <div class="form-group ab-0">
            <label for="telepon_user"></label>
            <input type="text" name="telepon_user" id="telepon_user" class="form-control" placeholder="Masukkan Telepon User">
          </div>
          <div class="form-group ab-0">
            <label for="alamat_user"></label>
            <input type="text" name="alamat_user" id="alamat_user" class="form-control" placeholder="Masukkan Alamat User">
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Ubah Data Siswa -->
<div class="modal fade" id="modalUbah" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ubah <?= $judul; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <a href="/user/ubah/<?= $row['id_user']; ?>"> </a>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('user/ubah'); ?>" method="post">
          <input type="hidden" name="id_user" id="id_user">
          <div class="form-group ab-0 ab-0">
            <label for="id_user"></label>
            <input readonly type="text" name="id_user" id="id_user" class="form-control" placeholder="Masukkan Id user" value="<?= $row['id_user'] ?>">
          </div>
          <div class="form-group ab-0">
            <label for="kode_akses"></label>
            <input type="text" name="kode_akses" id="kode_akses" class="form-control" placeholder="Masukkan Kode Akses" value="<?= $row['kode_akses'] ?>">
          </div>
          <div class="form-group ab-0">
            <label for="pass_user"></label>
            <input type="text" name="pass_user" id="pass_user" class="form-control" placeholder="Masukkan Passwors User" value="<?= $row['pass_user'] ?>">
          </div>
          <div class="form-group ab-0">
            <label for="nama_user"></label>
            <input type="text" name="nama_user" id="nama_user" class="form-control" placeholder="Masukkan Nama User" value="<?= $row['nama_user'] ?>">
          </div>
          <div class="form-group ab-0">
            <label for="telepon_user"></label>
            <input type="text" name="telepon_user" id="telepon_user" class="form-control" placeholder="Masukkan Telepon User" value="<?= $row['telepon_user'] ?>">
          </div>
          <div class="form-group ab-0">
            <label for="alamat_user"></label>
            <input type="text" name="alamat_user" id="alamat_user" class="form-control" placeholder="Masukkan Alamat User" value="<?= $row['alamat_user'] ?>">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Hapus Data Siswa-->
<div class="modal fade" id="modalHapus">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="/user/hapus" method="post">
        <div class="modal-body">
          Apakah anda yakin ingin menghapus data ini?
          <input type="hidden" id="id_user" name="id_user">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Yakin</button>
        </div>
      </form>
    </div>
  </div>
</div>