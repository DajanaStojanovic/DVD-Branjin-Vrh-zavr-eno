<?php include_once 'konfiguracija.php'; ?>
<?php

session_start();
session_destroy();
header("location: index.php");