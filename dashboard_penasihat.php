

<?php
//sambung ke pangkalan data include "config.php";
//sambung fail header
include "header.php";
//memastikan pengguna login terlebih dahulu
include('pengesahan_guru.php');
//dapatkan id login dari sesi login
Sid-$_SESSION['idguru'];
//query nama koku yang berdaftar dengan idguru
$dataA-mysqli_query($samb, "select from koku where idguru='$id""); $infoA=mysqli_fetch_array($data);
//umpukkan pd p/ubah bernama koku
?>
<html>
$koku=$infoA['namakoku'];
<center><h2>DASHBOARD GURU PENASIHAT: <?php echo $koku; ?></h2> </center>
<body>
<fieldset><center>
<b>SELAMAT DATANG:</b> <br>
<?php
//Papar maklumat lengkap pengguna login
//query nama koku yang berdaftar dengan idguru
*
$dataB-mysqli_query($samb, "select from penasihat where idguru='$id""); $infoB=mysqli_fetch_array($dataB);
?>
Nama Penasihat: <?php echo $infoB[ 'namaguru']; ?><br> ID Guru: <?php echo $infoB['idguru']; ?></br>
Katalaluan: <?php echo $infoB['katalaluan']; ?></br>
<u>Menu:</u><br>
<!--papar pautan -->
<a href="senarai pelajar.php">Senarai Ahli</a> | <a href="laporan_guru.php">Laporan Ahli</a> | <a href="daftar_csv.php">Import Rekod</a> | <a href="logout.php">Logout</a>
</center></fieldset> </body>
</html>