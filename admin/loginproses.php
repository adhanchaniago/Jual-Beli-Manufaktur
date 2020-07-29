<?php
if (isset($_POST['submit']))
        {
include('koneksi.php');

session_start();

//tangkap data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

  $query = mysql_query("SELECT * FROM admin where username='$username' AND password = '$password'");
  if (mysql_num_rows($query) == 1) 
  {
    
    $row = mysql_fetch_array($query);
  //kalau username dan password sudah terdaftar di database
  //buat session dengan nama username dengan isi nama user yang login
    $_SESSION['id_admin'] = $id_admin;
    $_SESSION['nama'] = $nama;
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;


    header('location: tampil_produk.php');

  }
  else {
    //kalau username ataupun password tidak terdaftar di database
    echo"
      <script language='javascript'>
        window.alert('Invalid username or password');
        window.history.back();
      </script>
    ";
  }
}
?>
