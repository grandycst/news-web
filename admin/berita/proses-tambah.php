<?php
// Include koneksi database
include "../koneksi.php";

// Ambil data dari form
$id_kategori = $_POST['id_kategori'];
$judul_berita = $_POST['judul_berita'];
$tgl_berita = $_POST['tgl_berita'];
$isi_berita = $_POST['isi_berita'];

// Upload gambar
$gambar_berita = $_FILES['gambar_berita']['name'];
$gambar_tmp = $_FILES['gambar_berita']['tmp_name'];
$gambar_size = $_FILES['gambar_berita']['size'];
$gambar_error = $_FILES['gambar_berita']['error'];

// Tentukan direktori upload
$upload_dir = 'uploads/';
$upload_file = $upload_dir . basename($gambar_berita);

// Validasi gambar
if ($gambar_error === UPLOAD_ERR_OK) {
    if (move_uploaded_file($gambar_tmp, $upload_file)) {
        // Query untuk memasukkan data berita ke dalam database
        $query = "INSERT INTO berita (id_kategori, judul_berita, tgl_berita, isi_berita, gambar_berita) 
                  VALUES ('$id_kategori', '$judul_berita', '$tgl_berita', '$isi_berita', '$gambar_berita')";

        if (mysqli_query($koneksi, $query)) {
            echo "<script>alert('Berita berhasil ditambahkan!'); window.location.href='../admin/?page=berita/index';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan berita: " . mysqli_error($koneksi) . "'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Gagal mengunggah gambar.'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Terjadi kesalahan saat mengunggah gambar.'); window.history.back();</script>";
}

// Tutup koneksi database
mysqli_close($koneksi);