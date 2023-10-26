

<?php
//sambung ke pangkalan data include "config.php"; //sambung fail header include "header.php";
//KESELAMATAN UTK ELAK BYPASS include('pengesahan_guru.php');
?>
<html>
<body><center>
<h2>DAFTAR AHLI<br>
IMPORT FAIL CSV</h2></center> <fieldset><center><body>
<label>Pilih lokasi fail CSV/Excel:</label>
<form action="import_csv.php" method="post" name="upload_excel" enctype="multipart/form-data">
<input type="file" name="file" id="file" class="input-large"><br> <button type="submit" id="submit" name="Import" >Upload</button> </form><br>
<a href="dashboard_penasihat.php">Ke Menu Utama</a><br>
</center></fieldset> </body>
</html>
