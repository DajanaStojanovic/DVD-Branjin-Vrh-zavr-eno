<?php include_once 'konfiguracija.php'; ?>


<!doctype html>
<html>
<head>
	<?php 	include_once 'head.php';  ?>
	</head>
<body>
	
	<?php 	
	include_once 'nav.php'; 
	 ?>

<div class="row">

<div class="col-lg-1 col-md-1 col-sm-1"></div>
            <div class="col-lg-7 col-md-8 col-sm-7">
                <h3><img src="slike/kontakt.png" alt="" /> ERA diagram stranice DVD Branjin Vrh</h3>
                <hr class="left">
            </div>  
         </div>
	
	<?php 
				
				if(isset($_SESSION["autoriziran"])):
					?>
				
		<?php
				endif;
				 ?>
				 
<div class="row">
	<div class="col-lg-2 col-md-2 col-sm-2"></div>
            <div class="col-lg-8 col-md-8 col-sm-8">
	<img src="slike/era.png" alt="era diagram" class="img-responsive" />
</div></div>
<br />
<?php 	
	include_once 'contact.php';  
	 include_once 'podnozje.php';
	include_once 'script.php';  
?>


</body>
</html>