

<?php
//sambung ke pangkalan data include "config.php";
//sambung fail header
include "header.php";
//memastikan pengguna login terlebih dahulu
include('pengesahan_guru.php');
//semak sama ada data telah dihantar if(isset($_POST['update'])){
//pembolehubah untuk memegang data yang dihantar $Idkoku = $_POST['idkoku']; $Namakoku= $_POST['namakoku'];
$Idguru
=
$_POST['idguru'];
//KEMASKINI DATA DENGAN REKOD BARU
$result = mysqli_query($samb, "UPDATE koku SET namakoku='$Namakoku', idguru='$Idguru'
WHERE idkoku='$Idkoku"");
//papar mesej jika rekod sudah di update
echo "<script> alert('Kemaskini maklumat berjaya');
?>
}
<?php
window.location='papar_koku.php'</script>";
//DAPATKAN ID DARI URL
$id = $_GET['kemaskini_id'];
//PILIH DATA BERDASARKAN PADA ID REKOD
$result = mysqli_query($samb, "SELECT FROM koku WHERE idkoku="$id" "); while($res = mysqli_fetch_array($result))
{
//Paparkan nilai asal
$Namakoku = $res [ 'namakoku'];
}
?>
$Idguru = $res['idguru'];
<!-- HTM1 Bermula -->
<html>
<head>
<title>SIS DAFTAR</title>
</head>
<center><h2>DASHBOARD PENTADBIR</h2></center>
<body>
<fieldset><center>
<u>MAKLUMAT BADAB BERUNIFORM</u><br>


<!-- Papar komponen borang dengan data sedia ada -->
<form name="form1" method="post" action="edit_koku.php"> <table border="0">
<tr>
<td>Nama Badan Beruniform</td>
<td><input type="text" name="namakoku" value="<?php echo $Namakoku; ?>"></td> </tr>



<tr>
<td>Id Guru Penasihat</td>
<td>
<select name="idguru">
<option><?php echo $Idguru; ?></option> <!-- PAPAR PILIHAN LAIN -->
<?php
$data1=mysqli_query($samb, "SELECT * FROM penasihat");
while ($info1=mysqli_fetch_array($data1))
</td>
</tr>
{
echo "<option>$info1 [idguru]</option>";
}
?>
</select><br>
<!-- bawa data idpengguna, disembunyikan --> <td><input type="hidden" name="idkoku"
value=<?php echo $_GET['kemaskini_id']; ?>></td>
<td><input type="submit" name="update" value="Kemaskini"></td> </tr> </table> </form>
<!-- papar pautan -->
<center><a href="dashboard_pentadbir.php">Menu Pentadbir</a> | <a href="logout.php">Logout</a></center><br>
</center></fieldset>
</body> </html>