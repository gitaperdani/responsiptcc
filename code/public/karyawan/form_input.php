<?php

	include("menu.php") ;
?>
<h1>Silahkan Masukkan data Karyawan</h1>

<div class="table-responsive">  
<table class="table">
<form action="input_proses.php" method="post">
	<tr>
		<td>Id Karawan</td>
		<td><input type="text" name="id" /></td>
	</tr>
	<tr>
		<td>Nama Karyawan</td>
		<td><input type="text" name="nama" /></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>
		<input type="radio" name="jk" value="L"> Laki-laki
		<input type="radio" name="jk" value="P"> Perempuan
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" /></td>
	</tr>
	<tr>
		<td>No Telpon</td>
		<td><input type="text" name="no_telp" /></td>
	</tr>
	<tr>
		<td colspan="2" style="text-align: center;"><input type="submit" value="Simpan"/><input type="reset" value="Batal"/></td>
	</tr>
</form>
</table>
</div>
<?php
include("menubawah.php") ;
?>
