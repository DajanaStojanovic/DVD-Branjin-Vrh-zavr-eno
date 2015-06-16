

<?php include_once 'konfiguracija.php'; ?>

 <script>
 $(document).ready(function () {
    $("input#submit").click(function(){
        $.ajax({
            type: "POST",
            url: "processupisnica.php", 
            data: $('form.contact').serialize(),
            success: function(msg){
                $("#thanks").html(msg) 
                $("#form-content").modal('hide'); 
            },
            error: function(){
                alert("failure");
            }
        });
    });
});



</script>
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
            <div class="col-md-7">
	
		<h3><span class="glyphicon glyphicon-pencil"></span> UPISNICA</h3>
		  <hr class="left">

	</div>

	<div class="col-lg-1 col-md-1"></div>
</div>
</div>



<div class="row">
	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
	<div class="col-md-10 povijest"> 
		Ukoliko želite postati član našeg DVD-a, molimo Vas popunite ove podatke. U vrlo kratkom roku
		će Vam na kućnu adresu stići Vaša članska iskaznica i poziv na upoznavanje. 
		
	</div>
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
</div>
<br />

<form class="form-horizontal" action="" method="POST">
	<div class="row">
  <div class="form-group">
  	<div class="col-lg-1 col-md-1 col-sm-1"> <span class="hidden-xs"></span> </div>
  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">
    <label for="ime">Ime</label>
   </div>
    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-10">
    <input type="text" class="form-control" id="ime" name="ime">
    </div>
  </div>
</div> 

	<div class="row">
  <div class="form-group">
  	 	<div class="col-lg-1 col-md-1 col-sm-1"> <span class="hidden-xs"></span> </div>
  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">
    <label for="imeoca">Ime oca</label>
     </div>
    
 <div class="col-lg-6 col-md-6 col-sm-8 col-xs-10">
    <input type="text" class="form-control" id="imeoca" name="imeoca">
   </div>
  </div>
</div> 
  
  
<div class="row">
  <div class="form-group">
 <div class="col-lg-1 col-md-1 col-sm-1"><span class="hidden-xs"></span> </div>
  	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">
    <label for="prezime">Prezime</label> 
      </div>
   <div class="col-lg-6 col-md-6 col-sm-8 col-xs-10">
    <input type="text" class="form-control" id="prezime" name="prezime">
   </div>
  </div>
</div> 




	<div class="row">
  <div class="form-group">
  	<div class="col-lg-1 col-md-1 col-sm-1"> <span class="hidden-xs"></span> </div>
  	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">
    <label for="datumrodenja">Datum rođenja</label>
      </div>
   <div class="col-lg-6 col-md-6 col-sm-8 col-xs-10">
    <input type="date" class="form-control" id="datumrodenja" name="datumrodenja">
   </div>
  </div>
</div> 
  
   
  
  
  
<div class="row">
  <div class="form-group">
  	<div class="col-lg-1 col-md-1 col-sm-1"> <span class="hidden-xs"></span> </div>
  	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">
    <label for="adresa">Adresa i mjesto</label>
     </div>
 <div class="col-lg-6 col-md-6 col-sm-8 col-xs-10">
    <input type="text" class="form-control" id="adresa" name="adresa">
  </div>
  </div>
</div> 
    
  
 <div class="row">
  <div class="form-group">
  <div class="col-lg-1 col-md-1 col-sm-1"> <span class="hidden-xs"></span> </div>
  	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">
    <label for="brojtel">Broj telefona ili mobitela</label>
     </div>
  <div class="col-lg-6 col-md-6 col-sm-8 col-xs-10">
    <input type="text" class="form-control" id="brojtel" name="brojtel">
  </div>
  </div>
</div> 
<div class="row">
<div class="form-group">
 <div class="col-lg-1 col-md-1 col-sm-1"> <span class="hidden-xs"></span> </div>
 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">
    <label for="email">Email</label>
     </div>
  <div class="col-lg-6 col-md-6 col-sm-8 col-xs-10">
      <input type="text" class="form-control" id="email" name="email" placeholder="ivan@example.hr">
    </div>
  </div>
</div> 


<div class="row">
  <div class="form-group">
  <div class="col-lg-1 col-md-1 col-sm-1"><span class="hidden-xs"></span> </div>
  	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 control-label">
    <label for="napomene">Napomene</label>
    </div>
<div class="col-lg-6 col-md-6 col-sm-8 col-xs-10">
    <textarea type="text" class="form-control" id="napomene" name="napomene"></textarea>
  </div>
  </div>
</div>  

<br />
<div class="col-lg-8 col-md-8 col-sm-9"></div>
  <div class="form-group">
<div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
	
	<a href="index.php" class=" btn btn-danger">Odustani</a>
      <button type="submit" class="btn btn-danger">Potvrda</button>
    </div>
 
</form>


  </div>




<br /><br /><br />

<?php 	
	include_once 'contact.php'; 
	include_once 'podnozje.php'; 
	include_once 'script.php';  
?>


</body>
</html>