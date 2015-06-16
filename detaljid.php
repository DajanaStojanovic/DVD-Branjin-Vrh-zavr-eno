<?php include_once 'konfiguracija.php'; 

if(!isset($_GET["sifra"])){
	header("location: index.php");
}
//ja sam 100% siguran da imam šifru

 ?>
<!doctype html>
<html>
<head>
	<?php 	include_once 'head.php';  ?>
	<link href="css/style.css" rel="stylesheet" />
	</head>
<body>
	
	<?php 	
	include_once 'nav.php'; 
	 ?>
					
			
            	 <?php 
					$izraz = $veza -> prepare("select * from dogadaj
			where sifra=:sifra");	
			$izraz->bindParam(":sifra",$_GET["sifra"]);
			$izraz -> execute();
			$objekt = $izraz -> fetch(PDO::FETCH_OBJ);
			
			?>
			<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1"></div>
               <div class="col-lg-6 col-md-6 col-sm-6"> <h3><?php echo $objekt->naslov ?></h3>
                <hr class="left"></div>	
                </div>
	
	
	
				<strong>	<div class="row">
						<div class="col-lg-1 col-md-1 col-sm-1"></div>
						<div class="col-lg-9 col-md-9 col-sm-9"> <?php echo $objekt->opis ?></div>
						<div class="col-lg-1 col-md-1 col-sm-1"></div>
					</div>
					<br />
					<div class="row">
						<div class="col-lg-1 col-md-1 col-sm-1"></div>
						<div class="col-lg-9 col-md-9 col-sm-9"> <?php echo $objekt->mjesto ?></div>
						<div class="col-lg-1 col-md-1 col-sm-1"></div>
					</div>
<div class="row">
						<div class="col-lg-1 col-md-1 col-sm-1"></div>
						
						<div class="col-lg-9 col-md-9 col-sm-9">   <?php 
    $dan = substr("$objekt->datumvrijeme", 8, 2);
    $mjesec = substr("$objekt->datumvrijeme",5, 2 );
    $godina = substr("$objekt->datumvrijeme", 0, 4);
    ?>

                        <?php echo $dan . "." . $mjesec . "." . $godina . "." ; ?></div>
						<div class="col-lg-1 col-md-1 col-sm-1"></div>
					</div></strong>




					<br />
							<div class="row">
						<div class="col-lg-1 col-md-1 col-sm-1"></div>
						<div class="col-lg-9 col-md-9 col-sm-9"> 
					<a href="index.php" class=" btn btn-danger">Nazad</a></div>
					</div>
				
<br /><br />
	
		

<?php 	
	include_once 'contact.php';  
	 include_once 'podnozje.php';
	include_once 'script.php';  
?>


</body>
</html>