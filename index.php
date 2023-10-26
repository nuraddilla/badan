<?php 
// sambung ke pangkalan data
include("config.php");
//sambung fail header
include("header.php");
//mulakan sesi login untuk kekalkan login
session_start();
//semak sama ada data dengan ID pengguna nama telah dihantar
if(isset($_POST['idguru'])){
//pembolehubah untuk memegang data yang dihantar
$user = $_POST['idguru'];
$pass = $_POST['katalaluan'];
//arahan sql akan dilaksankan
$query = mysqli_query($samb, "SELECT * FROM penasihat Where idguru = '$user' AND
katalaluan='$pass'");

if(mysqli_num_rows($query) == 0)
    {
    //papar mesej gagal login
      echo "<script>alert('ID Guru atau Katalaluan yang salah');
      window.location='index.php'</script>";
    }
     else
    {
     $row = mysqli_fetch_assoc($query);
     $_SESSION['idguru']=$row['idguru'];
     $_SESSION['level'] = $row['level'];
     //buka dashboard admin
     if($row['level']=="admin")
    {
     header("Location: dashboard_pentadbir.php");
    }
    //buka dashboard guru penasihat
     else if($row['level']=="user")
    {
     header("Location: dashboard_penasihat.php");
    }
     else
    {
    //papar mesej gagal login
    echo "<script>alert('ID Guru atau Katalaluan yang salah');
    window.location='log_masuk.php'</script>";
    }
    }
    }
?>
<html> 
<body>
<fieldset> <center>
<!-- Papar jadual -->
<table width='70%' border=0>
<tr>
<td width="900">GURU</td> <td width="900">PELAJAR</td> </tr>
<td>
<form method="POST">
<p>Login masuk untuk guru</p>
<label for="inputIDGuru">ID Guru</label><br>
<input type="text" name="idguru" placeholder="ID Guru" required><br> <label for="inputPassword">Katalaluan</label><br>
<input type="password" name="katalaluan"
id="inputPassword" placeholder="Katalaluan" required><br>
<button type="submit">Login</button><br>
</td>
<td>Login masuk untuk pelajar
<input onClick="location.href='pelajar_login.php" type="submit" value="Login"> <br>
<label>Untuk membuat semakan pendaftaran</label><br>
<br>Jika belum mendaftar, <a href="daftar.php">Daftar di sini</a>
</td>
</tr>
</form>
</fieldset></center>
</body> </html>
    

