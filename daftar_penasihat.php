

<?php
//sambung ke pangkalan data include "config.php"; //sambung fail header
include "header.php";
//memastikan pengguna login terlebih dahulu
include('pengesahan_guru.php')
//semak sama ada data telah dihantar if (isset($_POST['idguru'])) {
//pembolehubah untuk memegang data yang dihantar $Idguru $_POST['idguru'];
$Katalaluan $_POST['katalaluan'];
$Namaguru= $_POST['namaguru']; $Level $_POST['level'];
//tambah rekod baru ke dalam table
$rekod = "INSERT INTO penasihat (idguru, katalaluan, namaguru, level) VALUES ($Idguru', '$Katalaluan', $Namaguru', '$Level')";
// Melaksanakan pertanyaan rekod dengan sambungan ke p.data Shasil mysqli_query($samb, $rekod);

﻿

}
?>
// semak untuk melihat jika ada sebarang rekod dalam pangkalan data // papar mesej berjaya atau gagal simpan rekod baru
if ($hasil) {
}else{
}
echo "<script>alert('PENDAFTARAN PENASIHAT BERJAYA'); window.location= 'dashboard_pentadbir.php'</script>";
echo "<script>alert('PENDAFTARAN PENASIHAT GAGAL!'); window.location=' daftar_penasihat.php'</script>";
<!-- HTM1 Bermula -->
<html>
<center><h2>DASHBOARD PENTADBIR</h2></center>
<body>
<fieldset><center>
<u>DAFTAR PENASIHAT</u><br>
<!-- Papar Borang Pendaftaran -->
<form method="POST">
<label>ID Guru</label><br>
<input type="text" name="idguru" placeholder="guru123" required autofocus><br> <!-- Papar katalaluan--> <label>Katalaluan</label><br>
<input type="text" name="katalaluan" placeholder="123abc" required ><br> <!-- Papar nama guru-->
<label>Nama Guru</label><br>
<input type="text" name="namaguru" placeholder="Ali bin Abu" required ><br> <!-- Papar pilihan aras-->
<label>Aras</label><br>
<select name="level" required >
<option value="">--Pilih--</option>
<option value="user">Guru</option>
<option value="admin">Pentadbir</option>
</select><br><br>
<!-- Papar butang-->
<button type="submit">Daftar</button>
<button type="reset">Reset</button><br><br> </form>
<!-- Papar pautan menu-->


<center><a href="dashboard_pentadbir.php">Menu Pentadbir</a> | <a href="logout.php">Logout</a></center><br>
</center></fieldset>
</body> </html>
