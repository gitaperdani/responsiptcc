<?php
$host = "192.168.100.64:7306";
$user = "root";
$pass = "mypassword";
$database  ="toko";

$koneksi = mysqli_connect($host,$user,$pass,$database);

if(!$koneksi){
	die("Koneksi Gagal : " . mysqli_connect_error());
}
/*else{
	echo "koneksi berhasil";
}*/
?>