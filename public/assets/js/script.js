$(document).on('click', '#btn-edit', function () {
    $('.modal-body #id_anggota').val($(this).data('id_anggota'));
    $('.modal-body #no_registrasi').val($(this).data('no_registrasi'));
    $('.modal-body #id_jurusan').val($(this).data('id_jurusan'));
    $('.modal-body #nama_anggota').val($(this).data('nama_anggota'));
    $('.modal-body #no_induk').val($(this).data('no_induk'));
})

$(document).on('click', '#btn-edit', function () {
    $('.modal-body #id_peminjaman').val($(this).data('id_peminjaman'));
    $('.modal-body #id_anggota').val($(this).data('id_anggota'));
    $('.modal-body #id_buku').val($(this).data('id_buku'));
    $('.modal-body #id_user').val($(this).data('id_user'));
})

$(document).on('click', '#btn-hapus', function () {
    $('.modal-body #id_anggota').val($(this).data('id_anggota'));
  })

  $(document).on('click', '#btn-hapus', function () {
    $('.modal-body #id_peminjaman').val($(this).data('id_peminjaman'));
  })

  $(document).on('click', '#btn-edit', function () {
    $('.modal-body #id_pengembalian').val($(this).data('id_pengembalian'));
    $('.modal-body #id_anggota').val($(this).data('id_anggota'));
    $('.modal-body #id_user').val($(this).data('id_user'));
    $('.modal-body #id_pengembalian').val($(this).data('id_pengembalian'));
    
})

$(document).on('click', '#btn-hapus', function () {
    $('.modal-body #id_pengembalian').val($(this).data('id_pengembalian'));
  })

  $(document).on('click', '#btn-edit', function () {
    $('.modal-body #id_user').val($(this).data('id_user'));
    $('.modal-body #kode_akses').val($(this).data('kode_akses'));
    $('.modal-body #pass_user').val($(this).data('pass_user'));
    $('.modal-body #nama_user').val($(this).data('nama_user'));
    $('.modal-body #telepon_user').val($(this).data('telepon_user'));
    $('.modal-body #alamat_user').val($(this).data('alamat_user'));
    
})

$(document).on('click', '#btn-hapus', function () {
    $('.modal-body #id_user').val($(this).data('id_user'));
  })