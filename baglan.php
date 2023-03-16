<?php            
 /*
 $baglanti = new PDO("dsn","username","password",options)
 
 */
 $baglanti = new PDO("mysql:host=localhost;
 dbname=hastane_otomasyon;
 charset=utf8",
 "root","");
 
 $baglanti ->exec("SET NAMES utf8");
 
 ?>
 
 
 
 