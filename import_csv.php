

<?php
require('config.php');
include('pengesahan_guru.php'); if(isset($_POST["Import"])){
$filename-$_FILES["file"]["tmp_name"];
if($_FILES["file"]["size"] > 0){
$file = fopen($filename, "r");
while (($getData= fgetcsv($file, 10000, ",")) !== FALSE)
f
//tambah dalam baris
$save = "INSERT INTO daftar (icpelajar, nama, jantina, kelas, idkoku) values (".$getData[0]."','".$getData[1]."','".$getData[2]."',
".$getData[3]."','".$getData[4]."')";
$result = mysqli_query($samb, $save); if(!isset($result)){
echo "<script type=\"text/javascript\">alert(\"Pindah naik fail CSV gagal\"); window.location = \"daftar_csv.php\" </script>";
else {
}
echo "<script type=\"text/javascript\">alert(\"Pindah naik fail CSV berjaya\"); window.location \"dashboard_penasihat.php\"
</script>";
}
fclose($file);
}