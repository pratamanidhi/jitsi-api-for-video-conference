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
	$value = $Repository->getUser();
	?>

	<div align="center" class="container">
		<table class="table table-hover" >
			<thead>
				<tr>
					<th height="41" colspan="7">
						<a href="admin_add_user.php" class="badge badge-primary"><div style="font-size: 18px"><img src="../asset/png/person-3x.png"> Tambah User</div></a>
					</th>
				</tr>
				<tr align="center">
					<th height="32" scope="col">No</th>
					<th scope="col">Username</th>
					<th scope="col">Nama Instansi</th>
					<th scope="col">Room</th>
					<th scope="col" colspan="3">Action</th>
				</tr>
			</thead>
			<?php
			$i = 1;
			while($row = mysqli_fetch_array($value)){
			?>
			<tbody>
				<tr align="center">
					<th scope="row"><?php echo $i; ?></th>
					<td><?php echo $row["username"]; ?></td>
					<td><?php echo $row["nama_instansi"]; ?></td>
					<td><?php echo $row["room"]; ?></td>
					<td>
						<a href="admin_view_user.php?username=<?php echo $row['username']?>" class="badge badge-info"><div style="font-size: 15px"><img src="../asset/png/tag-3x.png"> Detail</div></a>
					</td>
					<td>
						<a href="admin_edit_user.php?username=<?php echo $row['username']?>" class="badge badge-warning"><div style="font-size: 15px"><img src="../asset/png/pencil-3x.png"> Edit</div></a>
					</td>
					<td>
						<a href="../model/delete_user.php?username=<?php echo $row['username']?>" onclick='return confirm("Yakin Hapus User?")' class="badge badge-danger"><div style="font-size: 15px"><img src="../asset/png/trash-3x.png"> Delete</div></a>
					</td>
				</tr>
			</tbody>
			<?php
			$i++;
			}
			?>
			<tfoot>
				<tr>
					<th colspan="7">
						<a href="logout.php" class="badge badge-danger"><div style="font-size: 18px"><img src="../asset/png/account-logout-3x.png"> Logout</div></a>
					</th>
				</tr>
			</tfoot>
		</table>
	</div>
	<?php
	?>
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