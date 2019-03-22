<?php
session_start();

include '../controller/database/connection.php';

$username = $_POST['username'];
$password = $_POST['password'];
if($username == '')
{
	$_SESSION['pesan'] = 'Username atau Password tidak boleh kosong';
	header('location:../view/admin_login_page.php');
}
else if ($password == '')
{
	$_SESSION['pesan'] = 'Username atau Password tidak boleh kosong';
	header('location:../view/admin_login_page.php');
}
else
{
$data = mysqli_query($conn,"select * from tb_prima_stream_admin where username='$username' and password='$password'");
$get = mysqli_num_rows($data);
if($get > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header('location:../view/admin_page.php');
}
else{
	$_SESSION['pesan'] = 'Login Gagal.. User  & Password Salah..';
	header('location:../view/admin_login_page.php');
}
}
?>
