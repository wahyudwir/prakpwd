<?php

include_once("koneksi.php");

$nim = $_GET['nim'];
$result = mysqli_query($con, "SELECT * FROM mahasiswa WHERE nim='$nim'");
while($user_data = mysqli_fetch_array($result))
{
	$nim = $user_data['nim'];
	$nama = $user_data['nama'];
	$tanggal_lahir = $user_data['tanggal_lahir'];
	$alamat = $user_data['alamat'];
}
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD PWD 3</title>
  </head>
<body>
 <h1>Edit Data Mahasiswa</h1>
    	
        <a href="index.php" class="btn btn-success btn-sm m-2"> Data </a>
    	
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
				<form name="edit" method="post" action="edit.php">
					<input type="hidden" name="nim" value="<?$_GET['nim'] ?>">
					<table width="25%" border="0">
						<tr>
							<td>Nama</td>
							<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
						</tr>
						<tr>
							<td>Tanggal Lahir</td>
							<td><input type="date" name="tanggal_lahir" value=<?php echo $tanggal_lahir;?>></td>
						<tr>
							<td>Alamat</td>
							<td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
						</tr>
						<tr>
							
							<td><input type="submit" name="edit" value="update"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		<?php
			if(isset($_POST['update']))
			{
			 $nim = $_POST['nim'];
			 $nama=$_POST['nama'];
			 $tanggal_lahir=$_POST['tanggal_lahir'];
			 $alamat=$_POST['alamat'];
			 // update user data
			$result = mysqli_query($con, "UPDATE mahasiswa SET
			nama='$nama',tanggal_lahir='$tanggal_lahir',alamat='$alamat' WHERE nim='$nim'");
			 // Redirect to homepage to display updated user in list
			header("Location: index.php");
			}
			?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
