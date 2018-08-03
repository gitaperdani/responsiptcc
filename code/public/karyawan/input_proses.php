<?php

include("koneksi.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

$sql = "INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `jk`, `alamat`, `no_telp`) 
		VALUES ('{$id}','{$nama}','{$jk}','{$alamat}','{$no_telp}')" ;

$eksekusi = mysqli_query($koneksi,$sql);

if($eksekusi){
	echo "Data berhasil disimpan";
}else{
	echo "Data Gagal Disimpan : ". $sql . "<br>" . mysqli_error($koneksi);
}
//header("Location: read_data.php") ;
?>