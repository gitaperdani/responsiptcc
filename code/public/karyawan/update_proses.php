<?php

include("koneksi.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

$sql = "UPDATE `karyawan` SET `nama_karyawan`='{$nama}',`jk`='{$jk}',`jk`='{$alamat}',`jk`='{$no_telp}'
		WHERE `id_barang`='{$id}'" ;
//echo "$sql";

$eksekusi = mysqli_query($koneksi,$sql);

if($eksekusi){
	echo "Data berhasil Diubah";
}else{
	echo "Data Gagal Diubah: ". $sql . "<br>" . mysqli_error($koneksi);
}
header("Location: read_data.php") ;
?>