<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>PrimaStream</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap1.css">
</head>
<body>
     <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="asset/png/logo_.png"></a>
        </nav>
    </div>
    <div class="container" style="margin-top:8%">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <br>
                         <div class="login-panel panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Silahkan Login</h3>
                            </div>
                            <div class="panel-body">
                                <form action="model/login-process.php" method="post">
                                <p><img src="asset/png/person-3x.png">Username</p>
                                <input type="text" name="username" placeholder="Username" class="form-control">
                                <p><img src="asset/png/key-3x.png">Password</p>
                                <input type="password" name="password" placeholder="Password" class="form-control"><br>
                                <input type="submit" name="view/admin_login_page.php" value="Login" class="btn btn-success"><br>
                                <a href="view/admin_login_page.php">Login</a> as admin
                                </form>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-4">
                <?php 
                    if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
                        echo '<div id="pesan" class="alert alert-danger">'.$_SESSION['pesan'].'</div>';
                    }
                    $_SESSION['pesan'] = '';
                    ?>
            </div>
        </div>
        <script type="text/javascript" src="css/jquery.js"></script>
        <script>
            $(document).ready(function(){setTimeout(function(){$("#pesan").fadeIn('slow');}, 500);});
            setTimeout(function(){$("#pesan").fadeOut('slow');}, 3000);
        </script>
        <br><br><br><br>

<footer class="page-footer font-small blue pt-4" style="color: white; background-color: #393e44;">
    <div class="container-fluid text-center text-md-left">
      <div class="row">
        <div class="col-md-6 mt-md-0 mt-3" style="margin-left: 4%;"  >
          <h5 class="text-uppercase">Kontak Kami</h5>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7932.3859768245675!2d106.82407799999292!3d-6.238275714673021!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3ddf8ce9bd1%3A0xdd9d33de0a966a7!2sGedung+Cyber!5e0!3m2!1sen!2sus!4v1542478138793" width="700" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <hr class="clearfix w-100 d-md-none pb-3">
        <div class="col-md-3 mb-md-0 mb-3">
            <h5 class="text-uppercase">Layanan</h5>
            <ul class="list-unstyled">
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
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://primastream.com/"> primastream.com</a>
    </div>
  </footer>
</body>
</html>