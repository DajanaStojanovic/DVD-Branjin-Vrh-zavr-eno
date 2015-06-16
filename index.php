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
	<div class="col-lg-1 col-md-1 col-sm-1">
		<span class="hidden-xs">
			
		</span>
	</div>
	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
	<?php include_once 'novosti.php'; ?>
		
	</div>
	
		
	</div>
	
<div class="row">
	<div class="col-lg-1 col-md-1 col-sm-1">
		<span class="hidden-xs">
			
		</span>
	</div>
	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
	<?php include_once 'slider.php'; ?>
		
	</div>
	
		
	</div>

<div class="row">
<div class="col-lg-1 col-md-1 col-sm-1"> </div>
 <div class="col-lg-3 col-md-3 col-sm-3 prijava">
		<span class="hidden-xs">
	
	<?php 
	
	include_once 'prijava.php';?>

</span>
	</div>

 </div>


<?php 	
	include_once 'contact.php';  
	 include_once 'podnozje.php';
	include_once 'script.php';  
?>


</body>
</html>