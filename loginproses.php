<?php
if (isset($_POST['submit']))
        {
include('koneksi.php');

session_start();

//tangkap data dari form login
$email = $_POST['email'];
$password = $_POST['password'];

//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);

  $query = mysql_query("SELECT * FROM member where email='$email' AND password = '$password'");
  if (mysql_num_rows($query) == 1) 
  {
    
    $row = mysql_fetch_array($query);
  //kalau email dan password sudah terdaftar di database
  //buat session dengan nama email dengan isi nama user yang login
    $_SESSION['id_member'] = $id_member;
    $_SESSION['nama'] = $nama;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;


    header('location: index.php');

  }
  else {
    //kalau email ataupun password tidak terdaftar di database
    echo"
      <script language='javascript'>
        window.alert('Invalid email or password');
        window.history.back();
      </script>
    ";
  }
}
?>
