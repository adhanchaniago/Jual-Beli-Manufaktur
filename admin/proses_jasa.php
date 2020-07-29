<?php

if(isset($_POST['tambah'])){
include "koneksi.php";
$id_jasa = $_POST['id_jasa'];
$nama_jasa = $_POST['nama_jasa'];
$gambar_jasa = $_POST['gambar_jasa'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$status = $_POST['status'];



$query=mysql_query("INSERT INTO jasa(id_jasa, nama_jasa, gambar_jasa, keterangan, harga, status) VALUES('$id_jasa','$nama_jasa','$gambar_jasa', '$keterangan', '$harga', '$status')");

if($query){
echo "Berhasil input data ke database ";
header('location:tampil_jasa.php');
?>

<?php
}else{
echo "Gagal input data";
echo mysql_error();
}
}
?>