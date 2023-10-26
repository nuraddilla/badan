

<?php
//sambung ke pangkalan data require('config.php'); //memastikan pengguna include('pengesahan.php'); //Dapatkan ID dari URL
login terlebih dahulu
$id $_GET['hapus_id'];
//Hapus rekod pelajar semasa
$result = mysqli_query($samb, "DELETE FROM daftar WHERE icpelajar="$id"");
//Papar mesej jika berjaya hapus
echo "<script>alert('Hapus maklumat berjaya'); window.location='senarai pelajar.php'</script>";
?>