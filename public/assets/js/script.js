// Button Edit Data Anggota
$(document).on('click', '#btn-edit', function () {
  $('.modal-body #id_anggota').val($(this).data('id_anggota'));
  $('.modal-body #no_registrasi').val($(this).data('no_registrasi'));
  $('.modal-body #id_jurusan').val($(this).data('id_jurusan'));
  $('.modal-body #nama_anggota').val($(this).data('nama_anggota'));
  $('.modal-body #no_induk').val($(this).data('no_induk'));
})

// Button Hapus Data Anggota
$(document).on('click', '#btn-hapus', function () {
  $('.modal-body #id_anggota').val($(this).data('id_anggota'));
})

// Button Edit Data Buku
$(document).on('click', '#btn-edit', function () {
  $('.modal-body #id_buku').val($(this).data('id_buku'));
  $('.modal-body #id_perolehan').val($(this).data('id_perolehan'));
  $('.modal-body #id_status').val($(this).data('id_status'));
  $('.modal-body #id_pengarang').val($(this).data('id_pengarang'));
  $('.modal-body #id_penerbit').val($(this).data('id_penerbit'));
  $('.modal-body #id_subyek').val($(this).data('id_subyek'));
  $('.modal-body #id_jenis').val($(this).data('id_jenis'));
  $('.modal-body #judul_buku').val($(this).data('judul_buku'));
})

// Button Hapus Data Buku
$(document).on('click', '#btn-hapus', function () {
  $('.modal-body #id_buku').val($(this).data('id_buku'));
})

// Button Hapus Data Anggota
$(document).on('click', '#btn-hapus', function () {
  $('.modal-body #id_anggota').val($(this).data('id_anggota'));
})


// Button Edit Data Peminjaman
$(document).on('click', '#btn-edit', function () {
  $('.modal-body #id_peminjaman').val($(this).data('id_peminjaman'));
  $('.modal-body #id_anggota').val($(this).data('id_anggota'));
  $('.modal-body #id_buku').val($(this).data('id_buku'));
  $('.modal-body #id_user').val($(this).data('id_user'));
  $('.modal-body #tanggal_pinjam').val($(this).data('tanggal_pinjam'));
  $('.modal-body #tanggal_pengembalian').val($(this).data('tanggal_pengembalian'));
})

// Button Hapus Data Peminjaman
$(document).on('click', '#btn-hapus', function () {
  $('.modal-body #id_peminjaman').val($(this).data('id_peminjaman'));
})

// Button Edit Data Pengembalian
$(document).on('click', '#btn-edit', function () {
  $('.modal-body #id_pengembalian').val($(this).data('id_pengembalian'));
  $('.modal-body #id_anggota').val($(this).data('id_anggota'));
  $('.modal-body #id_user').val($(this).data('id_user'));
  $('.modal-body #id_pengembalian').val($(this).data('id_pengembalian'));
})

// Button Hapus Data Pengembalian
$(document).on('click', '#btn-hapus', function () {
  $('.modal-body #id_pengembalian').val($(this).data('id_pengembalian'));
})

// Button Edit Data User
$(document).on('click', '#btn-edit', function () {
  $('.modal-body #id_user').val($(this).data('id_user'));
  $('.modal-body #kode_akses').val($(this).data('kode_akses'));
  $('.modal-body #pass_user').val($(this).data('pass_user'));
  $('.modal-body #nama_user').val($(this).data('nama_user'));
  $('.modal-body #telepon_user').val($(this).data('telepon_user'));
  $('.modal-body #alamat_user').val($(this).data('alamat_user'));
})

// Button Hapus Data User
$(document).on('click', '#btn-hapus', function () {
  $('.modal-body #id_user').val($(this).data('id_user'));
})

// Button Edit Data Perolehan
$(document).on('click', '#btn-edit', function () {
  $('.modal-body #id_perolehan').val($(this).data('id_perolehan'));
  $('.modal-body #perolehan').val($(this).data('perolehan'));
})
 
// Button Hapus Data Perolehan
$(document).on('click', '#btn-hapus', function () {
  $('.modal-body #id_perolehan').val($(this).data('id_perolehan'));
})

// Button Edit Data Status
$(document).on('click', '#btn-edit', function () {
  $('.modal-body #id_status').val($(this).data('id_status'));
  $('.modal-body #status').val($(this).data('status'));
})
 
// Button Hapus Data status
$(document).on('click', '#btn-hapus', function () {
  $('.modal-body #id_status').val($(this).data('id_status'));
})

// Button Edit Data pengarang
$(document).on('click', '#btn-edit', function () {
  $('.modal-body #id_pengarang').val($(this).data('id_pengarang'));
  $('.modal-body #nama_pengarang').val($(this).data('nama_pengarang'));
})
 
// Button Hapus Data pengarang
$(document).on('click', '#btn-hapus', function () {
  $('.modal-body #id_pengarang').val($(this).data('id_pengarang'));
})

// Button Edit Data penerbit
$(document).on('click', '#btn-edit', function () {
  $('.modal-body #id_penerbit').val($(this).data('id_penerbit'));
  $('.modal-body #nama_penerbit').val($(this).data('nama_penerbit'));
})
 
// Button Hapus Data penerbit
$(document).on('click', '#btn-hapus', function () {
  $('.modal-body #id_penerbit').val($(this).data('id_penerbit'));
})

// Button Edit Data subyek
$(document).on('click', '#btn-edit', function () {
  $('.modal-body #id_subyek').val($(this).data('id_subyek'));
  $('.modal-body #nama_subyek').val($(this).data('subyek_buku'));
})
 
// Button Hapus Data subyek
$(document).on('click', '#btn-hapus', function () {
  $('.modal-body #id_subyek').val($(this).data('id_subyek'));
})

// Button Edit Data jenis
$(document).on('click', '#btn-edit', function () {
  $('.modal-body #id_jenis').val($(this).data('id_jenis'));
  $('.modal-body #jenis_koleksi').val($(this).data('jenis_koleksi'));
})
 
// Button Hapus Data jenis
$(document).on('click', '#btn-hapus', function () {
  $('.modal-body #id_jenis').val($(this).data('id_jenis'));
})