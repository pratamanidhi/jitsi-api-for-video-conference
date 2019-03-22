<?php
include '../controller/Repository.php';
$Repository = new Repository();

$username = $_POST["username"];
$password = $_POST["password"];
$nama_instansi = $_POST["nama_instansi"];
$alamat = $_POST["alamat"];
$no_telp = $_POST["no_telp"];
$room = $_POST["room"];
$newPass = md5($password);

$val = $Repository->updatetUser($username,$newPass,$nama_instansi,$alamat,$no_telp,$room);
if ($val == "T"){
?>
<script type="text/javascript">
	alert("Succes");
	document.location='../view/admin_page.php';
</script>
<?php
}else{  
?>
<script type="text/javascript">
	alert("Failed");
	document.location='../view/admin_page.php'
</script>
<?php
}
?>