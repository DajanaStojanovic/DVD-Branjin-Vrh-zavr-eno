<?php include_once 'konfiguracija.php'; ?>
<div id="prijava" >
	
			
				
			
	<?php 
					
					if(!isset($_SESSION["autoriziran"])): ?>
				<form class="form-inline" action="<?php echo $putanjaApp ?>prijavljen.php"  method="POST">
  
 <div class="form-group form-prijava">
    <label for="email" class="control">Email</label>
    
      <input type="email" class="form-control form-prijava-p" id="email" name="email" placeholder="ivan@example.hr">
    
  </div>
  <br />
 <div class="form-group form-prijava">
    <label for="lozinka" class="control">Lozinka</label>
   
      <input type="password" class="form-control form-prijava-p" id="lozinka" name="lozinka">
   
  </div>

			

     
      <input class="btn btn-danger btn-prijava" type="submit" value="Prijava" />  
     

      </form>	
    <?php else: ?>
					Prijavljeni ste kao <?php echo $_SESSION["autoriziran"]->ime?>
					<?php  echo $_SESSION["autoriziran"]->prezime;?> <a href="<?php echo $putanjaApp ?>odjava.php"><input class="btn btn-danger btn-odjava" type="submit" value="Odjavi se" />  </a>
					
					
					<?php endif; ?>   
					
				


		</div>
