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
 
		
	</div>
	
<div class="row">
	<div class="col-md-1 col-sm-1"></div>
            <div class="col-md-7 col-sm-7">
	
		<h3><img src="slike/onama.png" alt="" />O NAMA</h3>
		  <hr class="left">
	
	</div>
	
	<div class="col-lg-1 col-md-1"></div>
</div>
<br />



<div class="row">
	<div class="col-lg-1 col-md-1 col-sm-1">
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<h4><img src="slike/kontakt.png" alt="" />Kontakt <br /></h4>
<p class="kontaktonama">
<strong>Svetog Križa 57a <br />
31 301 Branjin Vrh <br /></strong>
tel. 031 727 006 <br />
Kontakt: <a href="mailto: dvdbranjinvrh@gmail.com"> dvdbranjinvrh@gmail.com</a></p>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<span class="hidden-lg hidden-md hidden-sm"><br /></span>
	<h4><img src="slike/predsjednik.png" alt="" />Predsjedništvo<br /></h4>
	<p class="kontaktonama">
Predsjednik: Vjekoslav Dobranić  <br />
Zapovijednik: Daniel Kolac <br />
Tajnik: Antun Bajić </p>
 </div>
</div>
<br />



 <div class="row">
 <div class="col-lg-1 col-md-1 col-sm-1">
		<span class="hidden-xs">
			
		</span>
	</div>
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
    <h3><img src="slike/slike.png" alt="" /> </h3>
                <hr class="left">   
                </div>

  </div>
<div class="row">

             

<div class="row center">
<div class="col-lg-2 col-md-2 col-sm-2">
		<span class="hidden-xs">
			
		</span>
	</div>
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
<div id="carousel" class="carousel slide">
	<ol class="carousel-indicators">
		<li data-target="#carousel" data-slide-to="0" class="active"></li>
		<li data-target="#carousel" data-slide-to="1"></li>
		<li data-target="#carousel" data-slide-to="2"></li>
		<li data-target="#carousel" data-slide-to="3"></li>
		<li data-target="#carousel" data-slide-to="4"></li>
		<li data-target="#carousel" data-slide-to="5"></li>
		<li data-target="#carousel" data-slide-to="6"></li>
		<li data-target="#carousel" data-slide-to="7"></li>
		<li data-target="#carousel" data-slide-to="8"></li>


	
	</ol>
	<div class="carousel-inner">
		<div class="item active">
			<img src="<?php echo $putanjaApp ?>slike/onama/slika1.jpg" alt="" class="img-responsive" />
		</div>
		
		<div class="item">
			<img src="<?php echo $putanjaApp ?>slike/onama/slika2.jpg" alt="" class="img-responsive" />
		</div>
		
		<div class="item">
			<img src="<?php echo $putanjaApp ?>slike/onama/slika3.jpg" alt="" class="img-responsive" />
		</div>
		
		
		
			<div class="item">
			<img src="<?php echo $putanjaApp ?>slike/onama/slika4.jpg" alt="" class="img-responsive" />
		</div>
			<div class="item">
			<img src="<?php echo $putanjaApp ?>slike/onama/slika5.jpg" alt="" class="img-responsive" />
		</div>
			<div class="item">
			<img src="<?php echo $putanjaApp ?>slike/onama/slika6.jpg" alt="" class="img-responsive" />
		</div>
			<div class="item">
			<img src="<?php echo $putanjaApp ?>slike/onama/slika7.jpg" alt="" class="img-responsive" />
		</div>
			<div class="item">
			<img src="<?php echo $putanjaApp ?>slike/onama/slika8.jpg" alt="" class="img-responsive" />
		</div>
			<div class="item">
			<img src="<?php echo $putanjaApp ?>slike/onama/slika9.jpg" alt="" class="img-responsive" />
		</div>
			
	</div>
	<a class="carousel-control left" href="#carousel" data-slide="prev">
		<span class="icon-prev"></span>
	</a>
		<a class="carousel-control right" href="#carousel" data-slide="next">
		<span class="icon-next"></span>
	</a>
</div>
</div></div>
<div class="col-lg-2 col-md-2 col-sm-2">
		<span class="hidden-xs">
			
		</span>
	</div>
</div>

<br />
<?php 	
	include_once 'contact.php';  
	 include_once 'podnozje.php';
	include_once 'script.php';  
?>


</body>
</html>