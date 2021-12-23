<?php
include_once("koneksi.php");
$result = mysqli_query($con,"SELECT * FROM mahasiswa");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Data Pendaftaran </title>
  </head>
  <body>
  	<div class="container">
    	<h1>Data Pendaftar Test Covid</h1>
    	<a href="tambah.php" class="btn btn-success btn-sm m-2"> Tambah </a>
    	<table class="table table-bordered">
    		<thead>
    			<tr>
    				<th>Username</th>
    				<th>Password</th>
    				<th>KTP</th>
    				<th>Id Tanggal</th>
    			</tr>
    		</thead>
    		<tbody>
    			<?php
					while($user_data = mysqli_fetch_array($result)) {
					echo "<tr>";
 					echo "<td>".$user_data['nim']."</td>";
 					echo "<td>".$user_data['nama']."</td>";
 					echo "<td>".$user_data['alamat']."</td>";
 					echo "<td>".$user_data['tanggal_lahir']."</td>";
 					echo "<td>
                        <a href='edit.php?nim=$user_data[nim]'>Update</a> | 
                        <a href='delete.php?nim=$user_data[nim]'>Delete</a> |
                        <a href='lap_mhs.php?nim=$user_data[nim]'>cetak</a></td></tr>";}
?>
    		</tbody>
    		
    	</table>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>