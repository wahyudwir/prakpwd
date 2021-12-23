<?php
include "koneksi.php";
$nim= $_POST['nim']; //get the nama value from form
$sql = "SELECT * from mahasiswa where nim like '%$nim%' "; //query to get the search result
$query = mysqli_query($con,$sql); //execute the query $q
echo "<center>";
echo "<h2> Hasil Searching </h2>";
echo "<table border='1' cellpadding='5' cellspacing='8'>";
echo "
<tr bgcolor='orange'>
<td>Nim</td>
<td>Nama Mahasiswa</td>
<td>Alamat</td>
<td>Tanggal Lahir</>
</tr>";
	while ($data = mysqli_fetch_assoc($query)) { //fetch the result from query into an array
echo "
<tr>
<td>".$data['nim']."</td>
<td>".$data['nama']."</td>
<td>".$data['alamat']."</td>
<td>".$data['tanggal_lahir']."</td>
</tr>";
}
echo "</table>";
?>