

<?php
//sambung ke pangkalan data include "config.php";
//sambung fail header
include "header.php";
//memastikan pengguna login terlebih dahulu
include('pengesahan_guru.php');
//dapatkan id login dari sesi login
$id-$_SESSION['idguru'];
//query nama koku yang berdaftar dengan idguru
$dataA=mysqli_query($samb, "select from koku where idguru="$id"");
$infoA-mysqli_fetch_array($dataA);
//umpukkan pd p/ubah bernama koku
$koku=$infoA['namakoku'];
?>
<!-- HTM1 Bermula -->
<html>
<center><h2>DASHBOARD GURU PENASIHAT: <?php echo $koku; ?></h2> </center>
<body>
<fieldset>
<!-- papar jadual -->
<table width="800" border="1" align="center">
<!-- pautan menu -->
<center><a href="dashboard_penasihat.php">Menu Guru</a> | <a href="laporan_guru.php">Laporan Ahli</a> | <a href="daftar_csv.php">Import Rekod</a> | <a href="logout.php">Logout</a></center><br> <!-- papar tajuk setiap lajur dlm jadual --> <tr><center><u>SENARAI AHLI BERDAFTAR</u></center>
<td width="20"><b>Bil.</b></td>
<td width="100"><b>Nom KP Pelajar</b></td>
<td width="300"><b>Nama</b></td>
<td width="20"><b>Jantina</b></td>
<td width="20"><b>Kelas</b></td>
<td width="120"><b>Tindakan</b></td>
</tr> <?php
//Papar senarai pelajar yang disusun mengikut susunan menaik
$dataD = mysqli_query($samb, "SELECT * FROM daftar WHERE idkoku='$koku' ORDER BY nama ASC");
$no-1;
//pemula bagi pembilang
while ($infoD=mysqli_fetch_array($dataD))
?>
<tr>



<!-- panggil semula rekod ke dalam baris --> <td><?php echo $no; ?></td>
<td><?php echo $infoD['icpelajar']; ?></td> <td><?php echo $infoD['nama']; ?></td> <td><?php echo $infoD['jantina']; ?></td>
</tr>
<?php
<td><?php echo $infoD[ 'kelas']; ?></td> <td>
<!-- tambah pautan Edit pelajar | Hapus pelajar -->
<a href="edit_pelajar.php?kemaskini_id=<?php echo $infoD['icpelajar']; ?>" onclick="return confirm('Anda Pasti?')">Kemaskini</a> |
<a href="hapus_pelajar.php?hapus_id=<?php echo $infoD['icpelajar']; ?>" onclick="return confirm('Anda Pasti?')">Hapus</a>
</td>
$no++; //increment
}
?>
</table><center></fieldset>
</body> </html>