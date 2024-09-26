<?php
// Include koneksi database
include "../koneksi.php";

// Ambil data dari form
$id_berita = $_POST['id_berita'];
$id_kategori = $_POST['id_kategori'];
$judul_berita = $_POST['judul_berita'];
$tgl_berita = $_POST['tgl_berita'];
$isi_berita = $_POST['isi_berita'];
$foto_lama = $_POST['foto_lama'];

// Cek apakah ada file gambar yang diupload
if ($_FILES['gambar_berita']['name']) {
    // Hapus gambar lama dari folder images jika ada
    if (file_exists("uploads/" . $foto_lama) && $foto_lama != '') {
        unlink("uploads/" . $foto_lama);
    }

    // Upload gambar baru
    $gambar_berita = $_FILES['gambar_berita']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($gambar_berita);

    // Pindahkan file ke folder images
    if (!move_uploaded_file($_FILES['gambar_berita']['tmp_name'], $target_file)) {
        echo "<script>alert('Gagal mengupload gambar'); window.location.href='../?page=berita/index&id=$id_berita';</script>";
        exit();
    }

    // Update berita dengan gambar baru
    $update = mysqli_query($koneksi, "UPDATE berita SET id_kategori = '$id_kategori', judul_berita = '$judul_berita', tgl_berita = '$tgl_berita', isi_berita = '$isi_berita', gambar_berita = '$gambar_berita' WHERE id_berita = '$id_berita'");
} else {
    // Update berita tanpa mengubah gambar
    $update = mysqli_query($koneksi, "UPDATE berita SET id_kategori = '$id_kategori', judul_berita = '$judul_berita', tgl_berita = '$tgl_berita', isi_berita = '$isi_berita' WHERE id_berita = '$id_berita'");
}

// Jika berhasil
if ($update) {
    echo "<script> alert('data berhasil ditambahkan'); window.location.href='../?page=berita/index';</script>";
} else {
    echo "<script> alert('data Gagal ditambahkan'); window.location.href='../?page=berita/index';</script>";
}
?>
