<?php
    include_once("konfig.php");
  
$cnn = mysqli_connect(dbSERVER,dbUSER,dbPWD,dbDATABASE,dbPORT) 
or die("Terjadi kesalahan saat koneksi ke database");

echo "koneksi sukses<br>";