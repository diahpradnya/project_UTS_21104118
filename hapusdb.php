<?php
    
    include_once("Koneksidb.php");
    $alamat = "Abian Base";
    $sql = "DELETE FROM rl WHERE Alamat='$alamat';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "sukses<br>";
    }else{
        echo "gagal";
    }