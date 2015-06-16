<?php
include_once 'konfiguracija.php';

if($_POST){
  $izraz = $veza -> prepare("update dogadaj set naslov=:naslov, mjesto=:mjesto, datumvrijeme=:datumvrijeme,
   opis=:opis, objavio=:operater where 
   sifra=:sifra");  
  $izraz->bindParam(":sifra", $_POST['sifra']);
  $izraz->bindParam(":naslov", $_POST['naslov']);
  $izraz->bindParam(":mjesto", $_POST['mjesto']);
  $izraz->bindParam(":datumvrijeme", $_POST['datumvrijeme']);
  $izraz->bindParam(":opis", $_POST['opis']);
  $izraz->bindParam(":operater",$_SESSION["autoriziran"]->sifra);
  $izraz -> execute();
  header("location: index.php");
  }

if(isset($_GET["sifra"])){
  $izraz = $veza -> prepare("select * from dogadaj where sifra=:sifra");  
  $izraz->bindParam(":sifra",$_GET["sifra"]);
  $izraz -> execute();
  $objekt = $izraz -> fetch(PDO::FETCH_OBJ);



  
}

?>


<!doctype html>
<html>
<head>
  <?php   include_once 'head.php';  ?>
  <link type="text/css" rel="Stylesheet" href="<?php echo $putanjaApp ?>css/jquery-ui.css" />
  </head>
<body>
  <?php   
 
  include_once 'nav.php'; 
   ?>

<div class="row">
  <div class="col-md-1"></div>
            <div class="col-md-8">
  
    <h3><span class="glyphicon glyphicon-send"></span> OBJAVA DOGAĐAJ</h3>
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

<form class="form-horizontal" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
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
    <div class="col-lg-1 col-md-1 col-sm-1"> <span class="hidden-xs"></span> </div>
  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">
    <label for="mjesto">MJESTO</label>
   </div>
    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-10">
    <input type="text" class="form-control" id="mjesto" name="mjesto" value="<?php echo $objekt->mjesto; ?>">
    </div>
  </div>
</div> 



<div class="row">
  <div class="form-group">
    <div class="col-lg-1 col-md-1 col-sm-1"> <span class="hidden-xs"></span> </div>
  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">
    <label for="datumvrijeme">DATUM</label>
   </div>
    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-10">
   
    <input type="text" class="form-control" id="datum" name="datum" value="<?php echo $objekt->datumvrijeme ?>">
    </div>
  </div>
</div> 



  <div class="row">
    <div class="form-group">
  <div class="col-lg-1 col-md-1 col-sm-1"><span class="hidden-xs"></span> </div>
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">
    <label for="opis">OPIS</label>
    </div>
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-10">
    <textarea type="text" class="form-control objava" id="opis" name="opis"><?php echo $objekt->opis; ?></textarea>
  </div>
  </div>
  </div>
  




  
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