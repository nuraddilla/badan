
<?php
//sambung ke pangkalan data include "config.php"; //sambung fail header
include "header.php";
//memastikan pengguna login terlebih dahulu
include('pengesahan_guru.php');
//dapatkan id login dari sesi login $id-$_SESSION['idguru'];
?>
<!-- HTML bermula -->
<html>
<head>
<center><h2>DASHBOARD PENTADBIR SISTEM</h2>
</center>
</head>
<body>
<fieldset>
8<b>SELAMAT DATANG PENTADBIR:</b> <br>
<?php
//Papar maklumat lengkap login pentadbir
$dataB-mysqli_query($samb, "SELECT FROM penasihat WHERE idguru="$id""); $infoB-mysqli_fetch_array($dataB);
?>
Nama Pentadbir: <?php echo $infoB [ 'namaguru']; ?><br> ID Guru: <?php echo $infoB['idguru']; ?></br> Katalaluan: <?php echo $infoB['katalaluan']; ?></br>
<fieldset>


<!-- papar jadual -->
<table width="800" border="1" align="center">
<center>
<a href="daftar_penasihat.php">Daftar Penasihat Baru</a> | <a href="papar_koku.php">Papar Badan Beruniform</a> | <a href="logout.php">Logout</a></center><br>
<!-- papar menu -->
<tr><center><u>SENARAI GURU PENASIHAT</u></center>
<td width="30"><b>Bil.</b></td> <td width="400"><b>Nama</b></td> <td width="200"><b>Id Guru</b></td> <td width="100"><b>Katalaluan</b></td> <td width="20"><b>Aras</b></td>
<td width="150"><b>Tindakan</b></td>
</tr>
<?php
//Papar senarai guru penasihat yang disusun mengikut susunan menaik $dataD= mysqli_query($samb, "SELECT FROM penasihat ORDER BY namaguru ASC"); Sno-1; //pemula bagi pembilang
while ($infoD=mysqli_fetch_array($dataD))
{
?>
<tr>

﻿

<!-- panggil semula rekod ke dalam baris -->
 <td><?php echo $no; ?></td>
<td><?php echo $infoD [ 'namaguru']; ?></td> <td><?php echo $infoD['idguru']; ?></td> <td><?php echo $infoD['katalaluan']; ?></td> <td><?php echo $infoD [ 'level']; ?></td> <td>
<!-- tambah utk kemaskini & hapus -->
<a href="edit_penasihat.php?kemaskini_id=<?php echo $infoD['idguru']; ?>" onclick="return confirm('Anda Pasti?')">Kemaskini</a> |
<a href="hapus_penasihat.php?hapus_id=<?php echo $infoD['idguru']; ?>" onclick="return confirm('Anda Pasti?')">Hapus</a>
</td>
</tr>
<?php
$no++; 
//increment
}
 ?>
</table><center>
</fieldset> </body>
</html>