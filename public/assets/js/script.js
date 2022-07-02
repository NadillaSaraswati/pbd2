$(document).on('click', '#btn-edit', function () {
    $('.modal-body #id_anggota').val($(this).data('id_anggota'));
    $('.modal-body #no_registrasi').val($(this).data('no_registrasi'));
    $('.modal-body #id_jurusan').val($(this).data('id_jurusan'));
    $('.modal-body #nama_anggota').val($(this).data('nama_anggota'));
    $('.modal-body #no_induk').val($(this).data('no_induk'));
})

$(document).on('click', '#btn-hapus', function () {
    $('.modal-body #id_anggota').val($(this).data('id_anggota'));
  })

  $(document).on('click', '#btn-edit', function () {
    $('.modal-body #id_buku').val($(this).data('id_buku'));
    $('.modal-body #id_perolehan').val($(this).data('id_perolehan'));
    $('.modal-body #id_status').val($(this).data('id_status'));
    $('.modal-body #id_penerbit').val($(this).data('id_penerbit'));
    $('.modal-body #id_subyek').val($(this).data('id_subyek'));
    $('.modal-body #id_jenis').val($(this).data('id_jenis'));
    $('.modal-body #judul_buku').val($(this).data('judul_buku'));
})

$(document).on('click', '#btn-hapus', function () {
    $('.modal-body #id_buku').val($(this).data('id_buku'));
  })