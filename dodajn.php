<?php
include_once 'konfiguracija.php';

if (!isset($_SESSION["autoriziran"])) {
  header("location: " . $putanjaApp . "index.php");
}


  $izraz = $veza -> prepare("insert into vijesti(naslov) values ('')"); 
  $izraz -> execute();
  $vijest = $veza->lastInsertId();
  header("location: promjenanovost.php?sifra=" . $vijest);