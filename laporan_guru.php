

<?php
//sambung ke pangkalan data include "config.php";
//memastikan pengguna login terlebih dahulu include('pengesahan_guru.php');
//dapatkan id login dari sesi login
$id-$_SESSION['idguru'];
//query nama koku yang berdaftar dengan idguru
$dataA-mysqli_query($samb, "select from koku where idguru="$id" "); $infoA-mysqli_fetch_array($dataA);
//umpukkan pd p/ubah bernama koku
$koku=$infoA['namakoku'];
?>

﻿

<html> <head>
<title>SISTEM PENGURUSAN BADAN BERUNIFORM</title>
</head>
<body>
<table width="711" border="0">
<tr>
<td width="893"><table width="785" border="0">
<tr>
<td width="360" valign="top">
<!-- TUKAR LENCANA SEKOLAH DI SINI-->
<img src="logo.jpg" width="85" height="102" hspace="7" align="left" /> <span class="style1">
<!-- UBAH NAMA SEKOLAH DI SINI--> Sekolah Menengah Digital <br>
Jalan Kem Kuala Krai<br>
Kelantan Darul Naim.<br>
Telefon: 09-966 6077 <br>
Faks: 09-9667853<br>
<!-- TAMAT UBAHSUAI NAMA SEKOLAH-->
<br/>
</span><br /></td>
<td width="23">&nbsp;</td>
<td width="308" valign="top"> <div align="right">
<br />
Tarikh Cetak: <?php echo date("d/m/Y"); ?> </span></div></td>
</tr> <tr>
<td colspan="3" valign="top"> <hr /></td> </tr>
</table></td>
</tr>
<tr>
<td><p><strong>LAPORAN SENARAI AHLI BERDAFTAR: <?php echo $koku; ?></strong></p> <table width="800" border="1" align="center">
</td> </tr>
<!-- nama lajur dalam jadual-->
<tr>
<td width="20"><b>Bil.</b></td>
<td width="50"><b>Nom Kad Pengenalan</b></td>
<td width="100"><b>Nama</b></td>
<td width="30"><b>Jantina</b></td>
<td width="50"><b>Kelas</b></td>
</tr> <?php
<td width="50"><b>Kokurikulum</b></td>
//Arahan SQL buat query untuk memanggil rekod berdasarkan nama koku $dataB-mysqli_query($samb, "SELECT FROM daftar WHERE idkoku='$koku' ORDER BY nama ASC");
$no=1;//NILAI PEMULA PEMBILANG
while ($infoB=mysqli_fetch_array($dataB))
?>
{
    ﻿

<!-- masukan nilai kedalam lajur yang di tetapkan--> <tr>
<td><?php echo $no; ?></td>
<td><?php echo $infoB['icpelajar']; ?></td> <td><?php echo $infoB [ 'nama']; ?></td> <td><?php echo $infoB[ jantina']; ?></td> <td><?php echo $infoB['kelas']; ?></td> <td><?php echo $infoB['idkoku']; ?></td>
</tr>
<?php $no++;
} ?> <p>
</table>
<hr /><div align="center" class="style15"> Laporan Tamat *<br />Jumlah Rekod:
<?php echo $no-1; ?></div>
<center> <br>
<!-- PAUTAN MENU-->
<a href="dashboard_penasihat.php">Menu Utama</a> |
<a href="javascript:window.print()">Cetak Laporan</a> |
<a href="logout.php">Logout</a></center>
</body> </html>