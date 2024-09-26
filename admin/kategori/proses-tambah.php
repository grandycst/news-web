<?php
// Sisipkan file koneksi
include "../koneksi.php";

$nama_kategori= $_POST['nama_kategori'];

// QUERY

$tambah = mysqli_query($koneksi, "INSERT INTO kategori (nama_kategori) VALUES ('$nama_kategori')");

//jika berjasil

if ($tambah) {
    echo "<script> alert('data berhasil ditambahkan'); window.location.href='../?page=kategori/index';</script>";
} else {
    echo "<script> alert('data Gagal ditambahkan'); window.location.href='../?page=tambah_kategori';</script>";
}
