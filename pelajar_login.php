

<?php
//sambung ke pangkalan data include "config.php";
//sambung fail header
include "header.php";
//mulakan sesi login untuk kekalkan login
session_start();
//semak sama ada data dengan ID pengguna nama telah dihantar
if (isset($_POST['username'])) {
}
//pembolehubah untuk memegang data yang dihantar
$username= $_POST['username'];
//arahan sql akan dilaksanakan
$sql = "SELECT FROM daftar WHERE icpelajar='$username""; // Melaksanakan pertanyaan sql dengan sambungan ke p.data
$hasil mysqli_query($samb, $sql);
// semak untuk melihat jika ada sebarang rekod dalam pangkalan data if (mysqli_num_rows($hasil)) {
//mulakan sesi login dengan id guru yang login
$_SESSION['username'] = $username;
//bawakan ke dashboard pelajar header("Location: pelajar_semak.php");
}else{
//paparkan mesej jika gagal login
}
echo "<script>alert('Nombor Kad Pengenalan salah');
window.location='pelajar_login.php'</script>";
?>
<html> <head>
</head> <body>
<center><h2>DAFTAR MASUK AHLI</h2></center>
<fieldset><center>
<form method="POST">
<p>Login Pelajar</p>
<label>Nombor Kad Pengenalan Pelajar</label><br>
<input type="text" name="username" placeholder="090807031234"
maxlength='12' size="15" onkeypress='return event.charCode>= 48 && event.charCode <= 57' required autofocus><br>

﻿

</body> </html>
<button type="submit">Login</button>
</form>
<form action="index.php"><button type="submit">Home</button><br><br>
</center></fieldset>
