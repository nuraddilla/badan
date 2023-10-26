

<?php
//sambung ke pangkalan data include "config.php";
//sambung fail header
include "header.php";
//memastikan pengguna login terlebih dahulu
include('pengesahan_guru.php');
//dapatkan id login dari sesi login $id-$_SESSION['idguru'];
?> <html>
<head>
<center><h2>DASHBOARD PENTADBIR SISTEM</h2> </center>
</head> <body>
<fieldset>
<!-- papar jadual -->
<table width="800" border="1" align="center"> <!-- papar pautan menu -->
<center>
<a href="dashboard_pentadbir.php">Menu Utama</a> | <a href="daftar_koku.php">Daftar Baru</a> | <a href="logout.php">Logout</a></center><br> <!-- papar jadual -->
<tr><center><u>SENARAI BADAN BERUNIFORM</u></center>
<td width="30"><b>Bil.</b></td>
<td width="400"><b>Nama Badan Beruniform</b></td>
<td width="200"><b>Id Guru Pensihat</b></td>
<td width="120"><b>Tindakan</b></td>
</tr> <?php
//Papar senarai badan uniform yang disusun mengikut susunan menaik $no=1; //pemula bagi pembilang
$dataD= mysqli_query($samb, "SELECT * FROM koku ORDER BY namakoku ASC"); while ($infoD=mysqli_fetch_array($dataD))
{
?>
<tr>

﻿

<!-- panggil semula rekod ke dalam baris --> <td><?php echo $no; ?></td>
<td><?php echo $infoD [ 'namakoku']; ?></td> <td><?php echo $infoD['idguru']; ?></td> <td>
</tr>
<?php
<!-- tambah pautan Edit & Hapus -->
<a href="edit_koku.php?kemaskini_id=<?php echo $infoD['idkoku']; ?>" onclick="return confirm ('Anda Pasti?')">Kemaskini</a> |
<a href="hapus_koku.php?hapus_id=<?php echo $infoD['idkoku']; ?>" onclick="return confirm ('Anda Pasti?')">Hapus</a>
</td>
$no++; //increment
}
?>
</table><center></fieldset>
</body>
</html>