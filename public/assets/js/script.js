$(document).on('click', '#btn-edit', function () {
    $('.modal-body #id_anggota').val($(this).data('id_anggota'));
    $('.modal-body #no_registrasi').val($(this).data('no_registrasi'));
    $('.modal-body #id_jurusan').val($(this).data('id_jurusan'));
    $('.modal-body #nama_anggota').val($(this).data('nama_anggota'));
    $('.modal-body #no_induk').val($(this).data('no_induk'));

})