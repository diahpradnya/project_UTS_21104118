<?php

    include_once("koneksidb.php");
    $dom = "Tabanan";
    $sql = "UPDATE rl SET Domisili='$dom';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "sukses<br>";
    }else{
        echo "gagal";
    }