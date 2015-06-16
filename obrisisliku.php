<?php
include_once 'konfiguracija.php';

if (!isset($_SESSION["autoriziran"])) {
	header("location: " . $putanjaApp . "index.php");
}

	$veza->beginTransaction();
	$izraz = $veza -> prepare("delete from slika_vijest where vijest=:sifra");	
	$izraz -> execute($_GET);
	$izraz = $veza -> prepare("delete from slika where sifra=:sifra");	
	$izraz -> execute($_GET);
	$veza->commit();
	header("location: index.php");
