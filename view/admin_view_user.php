<!DOCTYPE html>
<html>
<head>
	<title>PrimaStream</title>
</head>
<body>
	<div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="../asset/png/logo_.png"></a>
        </nav>
    </div>
	<?php
	include_once "header.php";
	include("../controller/Repository.php");
	$Repository = new Repository();
	$value = $Repository->detailUser($_GET['username']);
	$row = mysqli_fetch_array($value);
	?>
	<div class="container">
		<form method="get">
			<table class="table table-hover" width="600">
				<thead>
					<tr>
						<td colspan="2"><div style="font-weight: bold;">User Detail</div></td>
					</tr>
				</thead>
				<tbody align="left">
					<tr>
						<td>Username</td>
						<td><?php echo $row['username']; ?></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><?php echo $row['password']; ?></td>
					</tr>
					<tr>
						<td>Nama Instansi</td>
						<td><?php echo $row['nama_instansi']; ?></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><?php echo $row['alamat']; ?></td>
					</tr>
					<tr>
						<td>Nomor Telepon</td>
						<td><?php echo $row['no_telp']; ?></td>
					</tr>
					<tr>
						<td>Room</td>
						<td><?php echo $row['room']; ?></td>
					</tr>
					<tr>
					<td colspan="2"><a href="admin_page.php" class="badge badge-pill badge-secondary">Halaman Utama</td>
				</tr>
				</tbody>
			</table>
		</form>
	</div>
	<footer class="page-footer font-small blue pt-4" style="color: white; background-color: #393e44;">
            <div class="footer-copyright text-center py-3">© 2018 Copyright:
              <a href="https://primastream.com/"> primastream.com</a>
            </div>
    </footer>

</body>
</html>
