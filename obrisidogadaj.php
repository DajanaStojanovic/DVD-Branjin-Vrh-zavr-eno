<?php
include_once 'konfiguracija.php';

if (!isset($_SESSION["autoriziran"])) {
	header("location: " . $putanjaApp . "index.php");
}

	$veza->beginTransaction();
	$izraz = $veza -> prepare("delete from dogadaj where sifra=:sifra");	
	$izraz -> execute($_GET);
	$veza->commit();
	header("location: index.php");


	

