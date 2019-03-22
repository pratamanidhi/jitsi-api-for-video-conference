<?php
session_start();
if (empty($_SESSION['username'])){
	header('location:../index.php');
}
else
{
?>
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
	?>
	<div align="center" class="container">
		<form action="../model/add_user_insert.php" method="post">
			<table>
				<thead>
					<tr>
						<th colspan="2"><div align="center">Add User</div></th>
					</tr>
				</thead>		
				<tbody>
					<tr>
						<td width="93">Username</td>
						<td width="240"><input type="text" name="username" size="40" class="form-control" required="" aria-required="true"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="text" name="password" size="40" class="form-control" required="" aria-required="true"></td>
					</tr>
					<tr>
						<td>Nama Instansi</td>
						<td><input type="text" name="nama_instansi" size="40" class="form-control" required="" aria-required="true"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>
							<textarea name="alamat" class="form-control" rows="4"></textarea>
						</td>
					</tr>
					<tr>
						<td>Nomor Telepon</td>
						<td><input type="text" name="no_telp" size="40" class="form-control" required="" aria-required="true"></td>
					</tr>
					<tr>
						<td>Room</td>
						<td><input type="text" name="room" size="40" class="form-control" required="" aria-required="true"></td>
					</tr>
					<tr align="center">
					<td colspan="2">
						<input type="submit" value="Simpan" class="btn btn-success"/> 
						<input type="reset" value="Reset" class="btn btn-warning">
						<br><br>
						<a href="admin_page.php" class="badge badge-secondary"><div style="font-size: 15px"><img src="../asset/png/justify-center-3x.png"> Halaman Utama
					</td>
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
<?php
}
?>