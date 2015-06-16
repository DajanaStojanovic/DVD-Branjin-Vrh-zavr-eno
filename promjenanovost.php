<?php include_once 'konfiguracija.php'; 

if($_POST){
  $izraz = $veza -> prepare("update vijesti set naslov=:naslov, vijest=:vijest, kategorija=:kategorija, datum=:datum, objavio=:operater where sifra=:sifra"); 
  $izraz->bindParam(":sifra", $_POST['sifra']);
  $izraz->bindParam(":naslov", $_POST['naslov']);
  $izraz->bindParam(":vijest", $_POST['vijest']);
  $izraz->bindParam(":kategorija", $_POST['kategorija']);
  $izraz->bindParam(":datum", $_POST['datum']);
  $izraz->bindParam(":operater", $_SESSION["autoriziran"]->sifra);
  
  $izraz -> execute();



            if(isset($_FILES["slika"])){
            //na serveru dati ovlasti 777 direktoriju gdje se spremaju slike (filezilla desni klin na dir)
            $target_dir = "slike/";
            $target_file = $target_dir . basename($_FILES["slika"]["name"]);
            move_uploaded_file($_FILES["slika"]["tmp_name"], $target_file);



            $izraz = $veza -> prepare("insert into slika(datoteka) values ('$target_file')"); 
            $izraz -> execute();
            $zadnjaslika = $veza->lastInsertId();

            $izraz = $veza->prepare("update vijesti set slika=:slika where sifra=:vijest");
            $izraz->bindValue(":slika", $zadnjaslika);
            $izraz->bindValue(":vijest", $_POST['sifra']);
            $izraz->execute();
            }



  header("location: index.php");
}



if(isset($_GET["sifra"])){
  $izraz = $veza -> prepare("select * from vijesti where sifra=:sifra");  
  $izraz->bindParam(":sifra",$_GET["sifra"]);
  $izraz -> execute();
  $objekt = $izraz -> fetch(PDO::FETCH_OBJ);

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

<div class="row">
	<div class="col-md-1"></div>
            <div class="col-md-8">
	
		<h3><span class="glyphicon glyphicon-send"></span> OBJAVA NOVOSTI</h3>
		  <hr class="left">

	</div>
	<div class="col-lg-2 col-md-2 prijava">
		<span class="hidden-sm hidden-xs">
	
	<?php include_once 'prijava.php';?>
</span>
	</div>
	<div class="col-lg-1 col-md-1"></div>
</div>
</div>




<br />

<form class="form-horizontal" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST" enctype="multipart/form-data">
	<div class="row">
  <div class="form-group">
  	<div class="col-lg-1 col-md-1 col-sm-1"> <span class="hidden-xs"></span> </div>
  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">
    <label for="naslov">NASLOV</label>
   </div>
    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-10">
    <input type="text" class="form-control" id="naslov" name="naslov" value="<?php echo $objekt->naslov; ?>">
    </div>
  </div>
</div> 




  <div class="row">
  	<div class="form-group">
  <div class="col-lg-1 col-md-1 col-sm-1"><span class="hidden-xs"></span> </div>
  	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">
    <label for="vijest">VIJEST</label>
    </div>
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-10">
    <textarea type="text" class="form-control objava" id="vijest" name="vijest"  ><?php echo $objekt->vijest;?></textarea>
  </div>
  </div>
  </div>
  
  <div class="row">
  <div class="form-group">
    <div class="col-lg-1 col-md-1 col-sm-1"> <span class="hidden-xs"></span> </div>
  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">
    <label for="kategorija">KATEGORIJA</label>
   </div>
    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-10">
    <select id="kategorija" name="kategorija">




                  <?php 
                  $izraz = $veza -> prepare("select * from kategorija"); 
                  $izraz -> execute();
                  $rezultati = $izraz -> fetchAll(PDO::FETCH_OBJ);
            
                  foreach ($rezultati as $r):
                  ?>
                  <option <?php 
                  if($r->sifra==$objekt->kategorija){
                    echo "selected=\"selected\"";
                  }
                  ?> value="<?php echo $r->sifra ?>"><?php echo $r->naziv ?></option>
            
                  <?php endforeach; ?>
              </select>
    </div>
  </div>
</div> 


<div class="row">
  <div class="form-group">
    <div class="col-lg-1 col-md-1 col-sm-1"> <span class="hidden-xs"></span> </div>
  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">
    <label for="datum">DATUM</label>
   </div>
    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-10">
   
    <input type="text" class="form-control" id="datum" name="datum" placeholder="<?php echo $objekt->datum; ?>" value="<?php echo $objekt->datum; ?>">
    </div>
  </div>
</div> 













  
 
    <div class="form-group">
  <div class="col-lg-1 col-md-1 col-sm-1"><span class="hidden-xs"></span> </div>
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">
  <label for="slika">SLIKA NA NASLOVNICI</label>
      </div>
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-10">
  <div class="controls">
    <input id="slika" name="slika" class="postavislike" type="file">
  </div>
</div></div>
  
    <div class="form-group">
<br />
<div class="col-lg-8 col-md-8 col-sm-8"></div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	
	<a href="index.php" class="btn btn-warning">Odustani</a>
      <button type="submit" class="btn btn-danger">Objavi</button>
      
     
    </div>
 <input type="hidden" name="sifra" value="<?php echo $objekt->sifra; ?>" />
</form>
</div>











<br /><br />

<?php 	
	include_once 'contact.php';  
	 include_once 'podnozje.php';
	include_once 'script.php';  
?>


</body>
</html>