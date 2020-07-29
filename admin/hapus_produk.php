<?php

if(isset($_GET['id'])){
	
	include('koneksi.php');
	
	$id = $_GET['id'];
	
	$cek = mysql_query("SELECT * FROM produk WHERE id_produk='$id'") or die(mysql_error());
	
	if(mysql_num_rows($cek) == 0){
		
		echo '<script>window.history.back()</script>';
	
	}else{
		
		$del = mysql_query("DELETE FROM produk WHERE id_produk='$id'");
		
		if($del){
			
			echo 'Data pegawai berhasil di hapus! ';		
			//echo '<a href="index.php">Kembali</a>';	
			header("location:tampil_produk.php");
			
		}else{
			
			echo 'Gagal menghapus data! ';	
			echo '<a href="index.php">Kembali</a>';	
		
		}
		
	}
	
}else{
	
	echo '<script>window.history.back()</script>';
	
}
?>