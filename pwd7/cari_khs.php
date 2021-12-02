<?php
include 'koneksi.php';
?>
<h3>Form Pencarian DATA KHS Dengan PHP </h3>
	<form action="" method="get">
		<label>Cari :</label>
		<input type="text" name="cari">
		<input type="submit" value="Cari">
	</form>
<?php
	if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
	}
	?>
		<table border="1">
			<tr>
			<th>No</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Kode MK</th>
			<th>Nama MK</th>
			<th>Nilai</th>
			</tr>
				
				<tr>
				<td><?php echo '1'; ?></td>
				<td><?php echo '18301'; ?></td>
				<td><?php echo 'Wahyu Dwi Ramadhandi'; ?></td>
				<td><?php echo '01';?></td>
				<td><?php echo 'PBO';?></td>
				<td><?php echo '80'; ?></td>
				</tr>
				
		</table>