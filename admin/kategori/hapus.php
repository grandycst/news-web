<?php
include "../koneksi.php";
// menerima id 
$id_kategori= $_GET['id_kategori'];

//Query Insert Ke Database
$hapus = mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori='$id_kategori'");

// jika berhasl
if ($hapus) {
    echo "<script> alert('data berhasil hapus'); window.location.href='?page=kategori/index';</script>";

    // jika gagal
} else {
    echo "<script> alert('data Gagal dihapus'); window.location.href=?page=kategori/index';</script>";
}