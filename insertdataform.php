<?php
    if(isset($_POST['txPLAT'])){
    include_once ("Koneksidb.php");
    $plat =$_POST['txPLAT'];
    $nama =$_POST['txNAMA'];
    $alamat = $_POST["txALAMAT"];
    $dom = $_POST["txDOM"];
    $telp = $_POST["txTELP"];

    $sql = "INSERT INTO rl(Platmobil,Nama,Alamat,Domisili,Telepon) 
    Values('$plat','$nama','$alamat','$dom','$telp');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "insert data berhasil<br>";
    }else{
        echo "insert gagal<br>";
    }
}else{
    header("location : insertdata2.php");
}