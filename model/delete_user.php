<?php
include '../controller/Repository.php';
$Repository = new Repository();
$value = $Repository->deleteUser($_GET["username"]);
if($value == "T"){
?>
<script type="text/javascript">
	alert("Delete Success");
	document.location='../view/admin_page.php';
</script>
<?php
}else{
?>
<script type="text/javascript">
	alert("Delete Failed");
	document.location='../view/admin_page.php';
</script>
<?php
}
?>