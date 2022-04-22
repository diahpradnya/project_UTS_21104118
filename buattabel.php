<?php

include_once("koneksidb.php");
$sql = "CREATE TABLE rl(
    Platmobil Varchar(10) PRIMARY KEY,
    Nama Varchar(50),
    Alamat Varchar(50),
    Domisili Varchar(50),
    Telepon Varchar(16)
);";
$hsl = mysqli_query($cnn,$sql);
if($hsl){
    echo "tabel sukses";
}else{
    echo "tabel gagal";
}