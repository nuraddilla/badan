

<?php
//sambung ke pangkalan data include "config.php";
//sambung fail header
include "header.php";
//memastikan pengguna login terlebih dahulu include('pengesahan_guru.php');
//semak sama ada data telah dihantar if(isset($_POST['update'])){
//pembolehubah untuk memegang data yang dihantar $Icpelajar $_POST['icpelajar']; $Nama=$_POST['nama'];
$Jantina $_POST['jantina']; $Kelas $_POST['kelas']; $Idkoku=$_POST['idkoku'];
//KEMASKINI DATA DENGAN REKOD BARU
$result = mysqli_query($samb, "UPDATE daftar SET nama='$Nama', jantina '$Jantina', kelas='$Kelas', idkoku='$Idkoku'
WHERE icpelajar='$Icpelajar'");
//papar mesej jika rekod sudah di update
echo "<script>alert('Kemaskini maklumat berjaya');
window.location='senarai pelajar.php'</script>";
}
?>
<?php
//DAPATKAN ID DARI URL
$id $_GET['kemaskini_id'];
//PILIH DATA BERDASARKAN PADA ID REKOD
$result = mysqli_query($samb, "SELECT FROM daftar WHERE icpelajar="$id"); while($res
{
mysqli_fetch_array($result))
//Paparkan nilai asal
}
?>
$Nama= $res['nama'];
$Jantina $res['jantina'];
=
$Kelas $res['kelas']; $Idkoku = $res['idkoku'];
<! HTM1 Bermula -->
<html>
<center><h2>DASHBOARD GURU PENASIHAT: <?php echo $Idkoku; ?></h2></center>
<body>
<fieldset><center>
<u>MAKLMAT PELAJAR</u><br>

﻿

<!-- Papar komponen borang dengan data sedia ada -->
<form name="form1" method="post" action="edit_pelajar.php">
<table border="0">
<tr>
<td>Nama Pelajar</td>
<td><input type="text" name="nama" value="<?php echo $Nama; ?>"></td>
</tr>
<tr>
<td>Jantina</td>
<td><input type="text" name="jantina" value="<?php echo $Jantina; ?>"></td>
</tr>
<tr>
<td>Kelas</td>
<td><input type="text" name="kelas" value="<?php echo $Kelas; ?>"></td>
</tr>
<tr>
<td>Badan Beruniform</td>
<td><select name="idkoku">
<option selected value="<?php echo $Idkoku; ?>"></option>
<?php
$data1=mysqli_query($samb, "SELECT * FROM koku");
while ($info1=mysqli_fetch_array($data1))
{
echo "<option>$info1 [namakoku]</option>";
}
?>
</select><br>
</td> </tr>
<!-- bawa data idpengguna, disembunyikan --> <td><input type="hidden" name="icpelajar" value=<?php echo $_GET['kemaskini_id']; ?>></td>
<td><input type="submit" name="update" value="Kemaskini"></td>
</tr>
</table> </form>
<!-- pautan menu -->
<center><a href="dashboard_penasihat.php">Menu Guru</a> | <a href="laporan_guru.php">Laporan Ahli</a> |
<a href="daftar_csv.php">Import Rekod</a> |
<a href="logout.php">Logout</a></center><br>
</center></fieldset>
</body> </html>
