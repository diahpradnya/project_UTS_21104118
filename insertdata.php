<?php
    include_once ("koneksidb.php");
    $plat ="DK 1080 MM";
    $nama = "Raka Chandra";
    $alamat = "Dalung Permai";
    $dom = "Badung";
    $telp = "0821123456";

    $sql = "INSERT INTO rl(Platmobil,Nama,Alamat,Domisili,Telepon) 
    Values('$plat','$nama','$alamat','$dom','$telp');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "insert data berhasil<br>";
    }else{
        echo "insert gagal<br>";
    }
