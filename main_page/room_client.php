<html itemscope itemtype="http://schema.org/Product" prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap1.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="../asset/png/logo_.png"></a>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="float: right;">
              <li class="nav-item">
                <a class="nav-link" href="../view/logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </nav>
        <?php
        include("../controller/Repository.php");
        $Repository = new Repository();
        $value = $Repository->liveStream($_GET['room']);
        $row = mysqli_fetch_array($value); 
        ?>
        <div class="container" align="center">
            <script src="http://meet.jit.si/external_api.js"></script>
            <script>
                var domain = "meet.jit.si";
                var options = {
                    roomName: "<?php echo $row['room']; ?>",
                    width: 1000,
                    height: 700,
                    parent: undefined,
                    configOverwrite: {},
                    interfaceConfigOverwrite: {
                        filmStripOnly: true
                    }
                }
                var api = new JitsiMeetExternalAPI(domain, options);
            </script>
        </div>
        
        <footer class="page-footer font-small blue pt-4" style="color: white; background-color: #393e44;">
            <div class="footer-copyright text-center py-3">© 2018 Copyright:
              <a href="https://primastream.com/"> primastream.com</a>
            </div>
    </footer>
    </body>
</html>