
<?php
//sambung ke pangkalan data require('config.php');
//memastikan pengguna login terlebih dahulu include('pengesahan_guru.php');
//Dapatkan ID dari URL
$id = $_GET['hapus_id'];
//Hapus rekod ALUMNI semasa
$result = mysqli_query($samb, "DELETE FROM koku WHERE idkoku="$id"");
//Papar mesej jika berjaya hapus
echo "<script>alert('Hapus maklumat berjaya');
window.location='papar_koku.php'</script>";
?>