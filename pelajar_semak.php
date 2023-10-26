

<?php
//sambung ke pangkalan data include "config.php";
//sambung fail header
include "header.php";
//memastikan pengguna login terlebih dahulu
include('pengesahan_pelajar.php');
//dapatkan id login dari sesi login $id=$_SESSION['username'];
?>
<html>
<body>
<center><h2>SEMAKAN MAKLUMAT PELAJAR</h2></center>
<fieldset><center>
<b>SELAMAT DATANG:</b> <br>
<?php
//Papar maklumat lengkap pengguna login
$dataA=mysqli_query($samb, "SELECT FROM daftar WHERE icpelajar="$id""); $infoA=mysqli_fetch_array($dataA);
$aa= $infoA['idkoku"];
?>
Nama Anda:<?php echo $infoA['nama']; ?><br>
Nombor KP:<?php echo $infoA['icpelajar']; ?></br> Jantina: <?php echo $infoA['jantina']; ?></br> Kelas: <?php echo $infoA['kelas']; ?></br>
Berdaftar:<?php echo $infoA['idkoku']; ?></br>
<u>RUMUSAN:</u><br>
<!-- KIRA BIL. REKOD MENGIKUT KOKU YANG PELAJAR DAFTAR DENGAN FUNGSI COUNT --> <?php
$dataD=mysqli_query($samb, "SELECT COUNT(idkoku) AS kokusama FROM daftar WHERE
idkoku='$aa'");
$infoD=mysqli_fetch_array($dataD);
?>
BILANGAN AHLI <?php echo $infoA['idkoku']; ?>:<?php echo $infoD['kokusama']." ORANG"; ?>
<br><br>
<a href="javascript:window.print()">Cetak Laporan</a> |
<a href="logout.php">Logout</a></center>
</center></fieldset>
</body>
</html>