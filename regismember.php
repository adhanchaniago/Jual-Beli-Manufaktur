<?php
include"koneksi.php";

$nama=$_POST['nama'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$jenis_kelamin=$_POST['jk'];
$telepon=$_POST['telepon'];
$password=$_POST['password'];

$perintah = mysql_query("INSERT INTO `member`(`nama`, `email`, `alamat`, `jk`, `telepon`, `password`) VALUES ('$nama','$email','$alamat','$jenis_kelamin','$telepon','$password')");

//$sql=mysqli_query($conn,$perintah);
if($perintah)
	{
		
		echo"
      <script language='javascript'>
        window.alert('Data berhasil dimasukan ke dalam database');
      </script>
    ";
    header('location: login.php');
	}
else
	{
		echo"Data gagal dimasukan ke dalam database";
	}
?>