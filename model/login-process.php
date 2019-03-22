<?php
session_start();

include '../controller/database/connection.php';

$username = $_POST['username'];
$password = $_POST['password'];
if($username == '')
{
	$_SESSION['pesan'] = 'Username atau Password tidak boleh kosong';
	header('location:../index.php');
}
else if ($password == '')
{
	$_SESSION['pesan'] = 'Username atau Password tidak boleh kosong';
	header('location:../index.php');
}
else
{
$data = mysqli_query($conn,"select * from tb_prima_stream_client where username='$username' and password=md5('$password')");
$get = mysqli_num_rows($data);
if($get > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	$query = mysqli_query($conn,"SELECT room FROM tb_prima_stream_client where username='$username'");
    $row = mysqli_fetch_array($query);
    echo "<title>PrimaStream</title>";
    echo "<link rel='stylesheet' type='text/css' href='../asset/css/bootstrap.css'>";
    echo "<link rel='stylesheet' type='text/css' href='../asset/css/bootstrap1.css'>";
    echo "<div>
        <nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
          <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarTogglerDemo03' aria-controls='navbarTogglerDemo03' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
          </button>
          <a class='navbar-brand' href='#''><img src='../asset/png/logo_.png'></a>
        </nav>
    </div>";
    echo "<div class='container' style='margin-top:8%'>";
    echo "<div class='row'";
    echo "<div class='col-md-4 col-md-offset-4'><br>";
    echo "<div class='login-panel panel panel-default'>";
    echo "<div class='panel-heading'>
          <h3 class='panel-title'>Nama Room Anda:</h3>
          </div>";
    echo "<div class='panel-body'>";
    echo "<p style='color:green; font-size:40px'>" . $row['room'] . "<p><br>" ;
    echo "<a class='btn btn-success' href='../main_page/room_client.php?room=" . $row['room'] . "'>Benar</a>";
    echo "<a class='btn btn-danger' href='../view/logout.php'>Salah</a>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div><br><br><br>";
    echo "<footer class='page-footer font-small blue pt-4' style='color: white; background-color: #393e44;''>
    <div class='container-fluid text-center text-md-left'>
      <div class='row'>
        <div class='col-md-6 mt-md-0 mt-3' style='margin-left: 4%;''  >
          <h5 class='text-uppercase'>Kontak Kami</h5>
          <iframe src='https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7932.3859768245675!2d106.82407799999292!3d-6.238275714673021!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3ddf8ce9bd1%3A0xdd9d33de0a966a7!2sGedung+Cyber!5e0!3m2!1sen!2sus!4v1542478138793' width='700' height='250' frameborder='0' style='border:0' allowfullscreen></iframe>
        </div>
        <hr class='clearfix w-100 d-md-none pb-3'>
        <div class='col-md-3 mb-md-0 mb-3'>
            <h5 class='text-uppercase'>Layanan</h5>
            <ul class='list-unstyled'>
              <li>
                <a>Stream Server</a>
              </li>
              <li>
                <a>Colocation</a>
              </li>
              <li>
                <a>VPS IIX</a>
              </li>
              <li>
                <a>Hosting</a>
              </li>
            </ul>
          </div>
      </div>
    </div>
    <div class='footer-copyright text-center py-3'>© 2018 Copyright:
      <a href='https://primastream.com/'> primastream.com</a>
    </div>
  </footer>";
}
else{
	$_SESSION['pesan'] = 'Login Gagal.. User  & Password Salah..';
	header('location:../index.php');
}
}
?>