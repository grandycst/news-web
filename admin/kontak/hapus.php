<?php
include "../koneksi.php";
// menerima id 
$id_kontak= $_GET['id_kontak'];

//Query Insert Ke Database
$hapus = mysqli_query($koneksi, "DELETE FROM kontak WHERE id_kontak='$id_kontak'");

// jika berhasl
if ($hapus) {
    echo "<script> alert('data berhasil hapus'); window.location.href='?page=kategori/index'</script>";

    // jika gagal
} else {
    echo "<script> alert('data Gagal dihapus'); window.location.href='?page=kategori/index'</script>";
}