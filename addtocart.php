<?php
if (isset($_POST['addcart'])) 
{

if (isset($_SESSION['email']))
 {

include('koneksi.php');
$id = $_GET['id'];
$qty = $_GET['qty'];
$email = $_SESSION['email'];

$ambil = mysql_query("SELECT id_member FROM member WHERE email = '$email'");
$id_member = mysql_fetch_array($ambil);

$bayar = mysql_query("SELECT harga FROM produk ");
    $bayarnya = mysql_fetch_array($bayar);
    $total = $bayarnya['harga'] * $qty;

//$cek = mysql_query("SELECT id_member FROM member WHERE id_member = '".$idmem."'");
// MASUKAN ID MEMBER DENGAN MENGGUNAKAN SESSION 

$add = mysql_query("INSERT INTO chart (`id_member`, `id_produk`, `quantity`, `total`) VALUES ('$id_member','$id','$qty','$total')");
if ($add)
{
	    echo "Berhasil menambahkan ke keranjang";
      echo"
      <script language='javascript'>
        window.location='index.php';
      </script>
    ";	
}
else
{
		    echo"
      <script language='javascript'>
        window.alert('Gagal');
      </script>";

}
}
}
?>