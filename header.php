<?php 
ob_start();
session_start();
include 'baglan.php';

$sorgu=$baglanti->prepare("SELECT * FROM kullanici WHERE kullanici_tc=:kullanici_tc");
$sorgu->execute([
'kullanici_tc'=>$_SESSION['userkullanici_tc']]);
$say = $sorgu->rowCount();
$sorgu=$sorgu->fetch(PDO::FETCH_ASSOC);
if($say==0){
   header('location:anasayfa.php?durum=izinsiz');
    exit;
 }  
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stil.css">
    <title>Hastane Otomasyon</title>
</head>
<body>
    <div class="ust_bar">
        <a href="anasayfa.php"><h1>Hastane Otomasyon</h1></a>
        <div class="menu">
            <a href="hesap.php"><h5>Hesap Bilgileri</h5></a>
            <a href="randevu.php"><h5>Randevu Bilgileri</h5></a>
        </div>
        
    </div>
  <a href="logout.php"><div class="cikis">
       Çıkış Yap
    </div></a>
</body>
</html>