<?php

include("koneksi.php");

$id_karyawan = $_GET['id_karyawan'] ;

$sql = "SELECT * FROM `karyawan` WHERE `id_karyawan`='{$id_karyawan}'" ;

$ekseskusi_id = mysqli_query($koneksi, $sql);

$hasil = mysqli_fetch_assoc($ekseskusi_id);
//var_dump($hasil);
include("menu.php") ;
?>
<h1>Ubah Data Karyawan</h1>

<div class="table-responsive">  
<table class="table">
<form action="update_proses.php" method="post">
	<tr>
		<td>Id Karyawan</td>
		<td><input type="text" name="id" value="<?php echo $hasil['id_karyawan'] ?>" readonly="readonly"/></td>
	</tr>
	<tr>
		<td>Nama Karyawan</td>
		<td><input type="text" name="nama" value="<?php echo $hasil['nama_karyawan'] ?>" /></td>
	</tr>
	<tr>
	<td>Jenis Kelamin</td>
					<?php
				if($hasil["jk"]=="L"){
					$k = "checked='checked'";
				}else {
					$k ="";
				}
				?>

		<td>
		<input type="radio" name="jk" value="L"<?php echo $k; ?>
			> Laki-laki
			<?php
				if($hasil["jk"]=="P"){
					$p = "checked='checked'";
				}else {
					$p ="";
				}
				?>
		<input type="radio" name="jk" value="P" <?php echo $p; ?> > Perempuan
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?php echo $hasil['alamat'] ?>" /></td>
	</tr>
	<tr>
		<td>No Telpon</td>
		<td><input type="text" name="no_telp" value="<?php echo $hasil['no_telp'] ?>" /></td>
	</tr>
	<tr>
		<td colspan="2" style="text-align: center;">
			<input type="submit" value="Simpan"/>
			<input type="reset" value="Batal"/>
		</td>
	</tr>
</form>
</table>
</div>
<?php
include("menubawah.php") ;
?>