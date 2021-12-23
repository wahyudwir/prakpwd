
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<div style="border:1px solid rgb(238,238,238); padding:10px; overflow:auto; width:1110px; height:375px;">
<form action="<?$_SERVER['PHP_SELF']?>" method="POST" name="pencarian" id="pencarian">
    <strong>Pencarian  :</strong>
    <input type="text" name="search" id="search" size="20"> * isi nama depan mahasiswa<br><br>                  
    <input type="submit" name="submit" id="submit" value="CARI">
</form>
</div>
<?php
$Open = mysql_connect("localhost","root","");
    if (!$Open){
    die ("Koneksi ke Engine MySQL Gagal !<br>");
        }
$Koneksi = mysql_select_db("akademik");
    if (!$Koneksi){
    die ("Koneksi ke Database Gagal !");
    }
//menampilkan data
if ((isset($_POST['submit'])) AND ($_POST['search'] <> "")) {
  $search = $_POST['search'];
  $sql = mysql_query("SELECT * FROM mahasiswa WHERE nim LIKE '%$search%'") or die(mysql_error());
    //menampilkan jumlah hasil pencarian
  $jumlah = mysql_num_rows($sql); 
  if ($jumlah > 0) {
    echo '<p>Ada '.$jumlah.' data yang sesuai.</p>';
    $nomer=0;
    while (    $hasil = mysql_fetch_array ($sql)) {
        $nomer++;
        $nim = stripslashes ($hasil['nim']);
        $nama = stripslashes ($hasil['nama']);
        $alamat = stripslashes ($hasil['alamat']);
        $tanggal_lahir = stripslashes ($hasil['tanggal_lahir']);
        }
?>
<table width="1110" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr bgcolor="#FFA800">
        <td width="30">No</td> 
        <td width="70" height="42">NIM</td> 
        <td width="120">Nama</td>    
        <td width="85">Alamat</td> 
        <td width="70">Tanggal Lahir</td> 
    </tr>
    <tr align="center" bgcolor="#DFE6EF">
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
    </tr>
    <tr align="center">
        <td><?=$nomer?><div align="center"></div></td>
        <td><?=$nim?><div align="center"></div></td>
        <td><?=$nama?><div align="center"></div></td>
        <td><?=$alamat?><div align="center"></div></td>
        <td><?=$tanggal_lahir?><div align="center"></div></td>
    </tr>
    <tr align="center" bgcolor="#DFE6EF">
        <td> </td>
        <td> </td>
        <td> </td> 
        <td> </td>
        <td> </td>
    </tr>
</table>
<?
    }
    else {
   // menampilkan pesan zero data
        echo 'Maaf, hasil pencarian tidak ditemukan.';
    }
}
//Tutup koneksi engine MySQL
    mysql_close($Open);
?>     
</body>
</html>