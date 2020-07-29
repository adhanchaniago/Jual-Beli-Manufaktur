<?php

if(isset($_POST['tambah'])){
include "koneksi.php";
$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$gambar_produk = $_POST['gambar_produk'];
$warna = $_POST['warna'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];



$query=mysql_query("INSERT INTO produk(id_produk, nama_produk, gambar_produk, warna, harga, stok) VALUES('$id_produk','$nama_produk','$gambar_produk', '$warna', '$harga', '$stok')");

if($query){
echo "Berhasil input data ke database ";
header('location:tampil_produk.php');
?>

<?php
}else{
echo "Gagal input data";
echo mysql_error();
}
}
?>