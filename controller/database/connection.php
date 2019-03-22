<?php 
 $host= "localhost";
 $username = "root";
 $password = "";
 $database = "db_prima_stream_project";

 $conn = mysqli_connect($host,$username,$password,$database);

 if (mysqli_connect_error()){
 	echo "Connection Lost".mysqli_connect_error();
 }

?>