<?php
$db_host = "Localhost";
$db_user = "root";
$db_pass = "";
$db_name = "klubmotor";
$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_error()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}
?>