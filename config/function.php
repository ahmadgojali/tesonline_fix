<?php 
   $hostname   	= "localhost";
   $username   	= "root";
   $password   	= "";
   $database    = "tesonline";

   $connect 	= mysqli_connect($hostname, $username, $password, $database) or die ('Koneksi Gagal! ');

  function tampil($query)	{
	global $connect;
	$result = mysqli_query($connect, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;

	$user = tampil("SELECT * from user");
var_dump($rows);
 }

 

  

 ?>