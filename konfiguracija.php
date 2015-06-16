<?php
session_start();

$naslovAplikacije="DVD Branjin Vrh";
//za server
//$putanjaApp="/OMS20142015/tjakopec/BPII/Knjiznica/";

//lokalno
$putanjaApp="/dvd/";
$mysql_host = "localhost";
$mysql_database = "dvd";
$mysql_user = "dvd";
$mysql_password = "dvd";

//spajanje na bazu
$veza = new PDO("mysql:dbname=" . $mysql_database . 
		";host=" . $mysql_host . 
		"", 
			$mysql_user, $mysql_password);
$veza->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$veza->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$veza->exec("SET CHARACTER SET utf8");
$veza->exec("SET NAMES utf8");