<?php
session_start();
if(empty($_SESSION['username'])){
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
	include("../controller/Repository.php");
	$Repository = new Repository();
	$value = $Repository->detailUser($_GET['username']);
	$row = mysqli_fetch_array($value);
	?>

	<div align="center" class="container">
		<form method="post" action="../model/edit_user.php">
			<table width="600">
				<thead>
					<tr>
						<th colspan="2"><div align="center">Edit User</div></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Username</td>
						<td>
							<input type="hidden" value="<?php echo $i; ?>">
							<input type="text" name="username" class="form-control" value="<?php echo $row['username'];?>">
						</td>
					</tr>
					<tr>
						<td>Password</td>
						<td>
							<input type="text" name="password" class="form-control" value="<?php echo $row['password'];?>">
						</td>
					</tr>
					<tr>
						<td>Nama Instansi</td>
						<td>
							<input type="text" name="nama_instansi" class="form-control" value="<?php echo $row['nama_instansi'];?>">
						</td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>
							<textarea name="alamat" class="form-control" rows="4">
								<?php echo $row['alamat'];?>
							</textarea>
						</td>
					</tr>
					<tr>
						<td>Nomor Telepon</td>
						<td>
							<input type="text" name="no_telp" class="form-control" value="<?php echo $row['no_telp'];?>">
						</td>
					</tr>
					<tr>
						<td>Room</td>
						<td>
							<input type="text" name="room" class="form-control" value="<?php echo $row['room'];?>">
						</td>
					</tr>
					<tr>
					<td colspan="2"><input type="submit" value="simpan" class="btn btn-success"></input></td>
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