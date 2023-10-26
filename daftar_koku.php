

<?php
//sambung ke pangkalan data include "config.php";
//sambung fail header
include "header.php";
//memastikan pengguna login terlebih dahulu
include('pengesahan_guru.php');
//semak sama ada data telah dihantar
if (isset($_POST['namakoku'])) {
}
?>
//pembolehubah untuk memegang data yang dihantar $Namakoku= $_POST['namakoku"];
$Idguru $_POST['idguru'];
//tambah rekod baru ke dalam table
$sql = "INSERT INTO koku (idkoku, namakoku, idguru)
VALUES (default, '$Namakoku', '$Idguru')";
// Melaksanakan pertanyaan rekod dengan sambungan ke p.data
$hasil
mysqli_query($samb, $sql);
// semak untuk melihat jika ada sebarang rekod dalam pangkalan data // papar mesej berjaya atau gagal simpan rekod baru if ($hasil) {
}else{
}
echo "<script>alert('PENDAFTARAN PENASIHAT BERJAYA'); window.location="papar_koku.php'</script>";
echo "<script>alert('PENDAFTARAN PENASIHAT GAGAL!'); window.location="daftar_koku.php'</script>";
<1 HTM1 Bermula -->
<html>
<center><h2>DASHBOARD PENTADBIR</h2></center> <body> <fieldset><center>
<u>DAFTAR BADAN BERUNIFORM</u><br>
<!-- Papar Borang Pendaftaran -->
<form method="POST">
<label>Nama Badan Beruniform</label><br>
<input type="text" name="namakoku" placeholder="NAMA BADAN BERUNIFORM" required ><br>
<label>Guru Penasihat </label><br>
<select name="idguru" required> <!-- Pilih dari p.data -->
<?php
$datal-mysqli_query($samb, "SELECT FROM penasihat");
while ($infol-mysqli_fetch_array($data1))
{
?>
echo "<option hidden selected> pilih anda echo "<option>$info1 [idguru]</option>";
--
</option>";
</select><br><br>



<!-- Papar butang -->
<button
<button
</form>
type="submit">Daftar</button> type="reset">Reset</button><br><br>
<!-- Papar pautan -->
<center><a
href="papar_koku.php">Senarai Badan Beruniform</a> |
<a href="logout.php">Logout</a></center><br>
</center></fieldset>
</body>
</html>