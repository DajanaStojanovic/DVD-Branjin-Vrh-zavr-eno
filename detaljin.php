<?php include_once 'konfiguracija.php'; 

if(!isset($_GET["sifra"])){
	header("location: index.php");
}


 ?>
<!doctype html>
<html>
<head>
	<?php 	include_once 'head.php';  ?>
	</head>
<body>
	
	<?php 	
	include_once 'nav.php'; 
	 ?>



					
			
            	 <?php 
					$izraz = $veza -> prepare("select a.naslov, a.vijest, a.datum from 
			vijesti a left join slika_vijest b
			on a.sifra=b.vijest left join slika c
			on c.sifra=b.slika
			where a.sifra=:sifra");	
			$izraz->bindParam(":sifra",$_GET["sifra"]);
			$izraz -> execute();
			$objekt = $izraz -> fetch(PDO::FETCH_OBJ);

			
			?>
			<div class="row">
			<div class="col-lg-1 col-md-1 col-sm-1"></div>
               <div class="col-lg-8 col-md-8 col-sm-8"> <h3><?php echo $objekt->naslov ?></h3>
                <hr class="left"></div>
             
		</div>
	
	
	
					<div class="row">
						<div class="col-lg-1 col-md-1 col-sm-1"></div>
						<div class="col-lg-9 col-md-9 col-sm-9"> <?php echo $objekt->vijest ?></div>
						<div class="col-lg-1 col-md-1 col-sm-1"></div>
					</div>
					<br />
					<div class="row">
					<div class="col-lg-9 col-md-9 col-sm-9"></div>
						<div class="col-lg-1 col-md-1 col-sm-1">
					<a href="index.php" class=" btn btn-danger">Nazad</a></div>
					</div>
					</br>
					<div class="row">
         <div class="col-lg-3 col-sm-3 col-md-3"></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">  <br />


                  <?php 
                  $izraz = $veza -> prepare("select c.datoteka from 
					vijesti a left join slika_vijest b
					on a.sifra=b.vijest left join slika c
					on c.sifra=b.slika
					where a.sifra=:sifra"); 
					$izraz->bindParam(":sifra",$_GET["sifra"]);
                  $izraz -> execute();
                  $rezultati = $izraz -> fetchAll(PDO::FETCH_OBJ);
            
                  foreach ($rezultati as $r)
                  	{echo '<img src="' . $r->datoteka . '" class="img-responsive" />'; }
                  ?>

            </div>
            
	</div>

		</div>
		<input type="hidden" name="sifra" value="<?php echo $_GET['sifra']; ?>" />
		<div class="col-lg-3 col-md-3 col-sm-3"></div>
	</div>
					<br /><br />
							<div class="row">
					<div class="col-lg-9 col-md-9 col-sm-9"></div>
						<div class="col-lg-1 col-md-1 col-sm-1">
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