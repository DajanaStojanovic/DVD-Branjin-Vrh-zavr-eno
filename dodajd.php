<?php
include_once 'konfiguracija.php';

if (!isset($_SESSION["autoriziran"])) {
  header("location: " . $putanjaApp . "index.php");
}


  $izraz = $veza -> prepare("insert into dogadaj(naslov) values ('')"); 
  $izraz -> execute();
  $zadnji = $veza->lastInsertId();
  header("location: promjenadogadaj.php?sifra=" . $zadnji);