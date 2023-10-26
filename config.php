<?php

$dbHost = 'localhost';
$dbUser = 'root';
// biarkan kosong password jika guna xampp
$dbPass = '';
//nama pangkalan data
$dbName = 'uniform';
$connect = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);


    if(mysqli_connect_errno())  {
    echo"Proses sambung ke pangkalan data gagal";  
    exit();
} 
?>