<?php
class Repository{
	function connect(){
		include 'database/connection.php';
		return $conn;
	}

	function getUser(){
		$Repository = new Repository();
		$conn = $Repository->connect();
		$query = "select * FROM tb_prima_stream_client order by username";
		$value = mysqli_query($conn, $query);
		return $value;
	}

	function insertUser($username,$newPass,$nama_instansi,$alamat,$no_telp,$room){
		$Repository = new Repository();
		$conn = $Repository->connect();
		$query = "insert tb_prima_stream_client set 
					username = '$username',
					password = '$newPass',
					nama_instansi = '$nama_instansi',
					alamat = '$alamat',
					no_telp = '$no_telp',
					room = '$room'";
		$value = mysqli_query($conn,$query);
		if ($value){
			return "T";
		} else {
			return "F";
		}
	}

	function updatetUser($username,$newPass,$nama_instansi,$alamat,$no_telp,$room){
		$Repository = new Repository();
		$conn = $Repository->connect();
		$query = "update tb_prima_stream_client set 
					username = '$username',
					password = '$newPass',
					nama_instansi = '$nama_instansi',
					alamat = '$alamat',
					no_telp = '$no_telp',
					room = '$room'";
		$value = mysqli_query($conn,$query);
		if ($value){
			return "T";
		} else {
			return "F";
		}
	}

	function deleteUser($username){
		$Repository = new Repository();
		$conn = $Repository->connect();
		$query = "delete FROM tb_prima_stream_client where username='$username'";
		$value = mysqli_query($conn,$query);
		if ($value){
			return "T";
		} else {
			return "F";
		}
	}

	function detailUser($username){
		$Repository = new Repository();
		$conn = $Repository->connect();
		$query = "select * from tb_prima_stream_client where username='$username'";
		$value = mysqli_query($conn,$query);
		return $value;
	}

	function liveStream($room){
		$Repository = new Repository();
		$conn = $Repository->connect();
		$query = "select room from tb_prima_stream_client where room='$room'";
		$value = mysqli_query($conn,$query);
		return $value;
	}
}
?>
