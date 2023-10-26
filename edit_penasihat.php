

<?php
3
//sambung ke pangkalan data
 include "config.php";
//sambung fail header
include "header.php";
//memastikan pengguna login terlebih dahulu
include('pengesahan_guru.php');
//semak sama ada data telah dihantar if(isset($_POST['update'])){
//pembolehubah untuk memegang data yang dihantar
$Namaguru = $_POST['namaguru'];
$Idguru = $_POST['idguru'];
$Katalaluan = $_POST['katalaluan'];
$Level = $_POST['level'];
//KEMASKINI DATA DENGAN REKOD BARU
$result = mysqli_query($samb, "UPDATE penasihat SET namaguru='$Namaguru", level='$Level', katalaluan='$Katalaluan'
WHERE idguru='$Idguru" ");
//papar mesej jika rekod sudah di update
echo "<script>alert('Kemaskini maklumat berjaya');
?>
}
window.location= 'dashboard_pentadbir.php'</script>";



<?php
//DAPATKAN ID DARI URL
$id = $_GET['kemaskini_id'];
//PILIH DATA BERDASARKAN PADA ID REKOD
$result = mysqli_query($samb, "SELECT * FROM penasihat WHERE idguru='$id'"); while($res = mysqli_fetch_array($result))
{
//Paparkan nilai asal
}
?>
$Namaguru = $res['namaguru'];
$Idguru = $res['idguru'];
$Katalaluan = $res['katalaluan'];
$Level = $res ['level'];
<!-- HTM1 Bermula -->
<html>
<head>
8<title>SIS DAFTAR</title>
</head>
<center><h2>DASHBOARD PENTADBIR</h2></center>
<body>
<fieldset>
<u>MAKLUMAT PENASIHAT</u><br>
<!-- Papar komponen borang dengan data sedia ada -->
<form name="form1" method="post" action="edit_penasihat.php"> <table border="0">

﻿

<tr>
<td>Nama Guru</td>
<td><input type="text" name="namaguru" value="<?php echo $Namaguru; ?>"></td>
</tr> <tr>
<td>ID Guru</td>
<td><input type="text" name="idguru" value="<?php echo $Idguru; ?>"></td>
</tr>
<tr>
<td>Katalaluan</td>
<td><input type="text" name="katalaluan" value="<?php echo $Katalaluan; ?>"></td>
<td>
<tr>
<td>Aras</td>
<select name="level">
<option><?php echo $Level; ?></option>
<!-- PAPAR PILIHAN LAIN -->
<option value="user">user</option> <option value="admin">admin</option>
</select><br>
</td> </tr>
<!-- bawa data idpengguna, disembunyikan --> <td><input type="hidden" name="idguru"
value=<?php echo $_GET['kemaskini_id']; ?></td>
<td><input type="submit" name="update" value="Kemaskini"></td>
</tr> </table>
</form>
<center><a href="dashboard_pentadbir.php">Menu Pentadbir</a> | <a href="logout.php">Logout</a></center><br>
</fieldset>
</body> </html>