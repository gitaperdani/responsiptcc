<?php

include("koneksi.php");

$sql = "SELECT * FROM `karyawan` WHERE 1" ;

$eksekusi = mysqli_query($koneksi, $sql);

//echo "$eksekusi";


// var_dump($row);
include("menu.php") ;
?>

<h1>Data Karyawan</h1>
<a href="form_input.php"> Input Data Karyawan </a>
<div class="table-responsive">  
<table class="table">
    <thead>
	<tr>
		<th>No</th>
		<th>Id Karyawan</th>
		<th>Nama Karyawan</th>
		<th>Jenis Kelamin </th>
		<th>Alamat</th>
		<th>No Telpon</th>
		<th>Aksi</th>
	</tr>
	</thead>
	</tbody>
	<tr>	
		<?php
		$no = 1;
			foreach ($eksekusi as $row) {
		?>
		<td><?php echo $no; ?></td>
		<td><?php echo $row['id_karyawan'] ?></td>
		<td><?php echo $row['nama_karyawan'] ?></td>
		<td><?php if($row['jk']=='L'){
			echo "Laki-laki";
		}else{
			echo "Perempuan";
		} ?></td>
		<td><?php echo $row['alamat'] ?></td>
		<td><?php echo $row['no_telp'] ?></td>
		<td>
				<a href="form_update.php?id_karyawan=<?php echo $row['id_karyawan'] ?>"> Update </a> |
				<a href="hapus.php?id_karyawan=<?php echo $row['id_karyawan'] ?>"> Delete </a> 
		</td>
	</tr>
	<?php
		$no++;
	}
	?>	
</tbody>	
</table>
</div>
<?php
include("menubawah.php") ;
?>