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

    <title>CRUD PWD 3</title>
  </head>
  <body>
  	<div class="container">
    	<h1>Tambah Data Mahasiswa</h1>
    	
        <a href="index.php" class="btn btn-success btn-sm m-2"> Data </a>
    	
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
        
                <form action="tambah.php" method="post" name="form1">
                    <table width="25%" border="0">
                        <tr>
                            <td>Nim</td>
                            <td><input type="number" name="nim"></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" name="nama"></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td><input type="date" name="tanggal_lahir"></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><input type="text" name="alamat"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="submit" class="btn btn-success btn-sm mt-2"></input></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
            <?php
             // Check If form submitted, insert form data into users table.
             if(isset($_POST['submit'])) {
             $nim = $_POST['nim'];
             $nama = $_POST['nama'];
             $alamat = $_POST['alamat'];
             $tanggal_lahir = $_POST['tanggal_lahir'];
             // include database connection file
             include_once("koneksi.php");
             // Insert user data into table
             $result = mysqli_query($con, "INSERT INTO mahasiswa(nim,nama,tanggal_lahir,alamat)
            VALUES('$nim','$nama','$tanggal_lahir','$alamat')");
            // Show message when user added
             echo "Data berhasil disimpan. <a href='index.php'>View Mahasiswa</a>";
            }
            ?>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>