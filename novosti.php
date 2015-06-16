<?php include_once 'konfiguracija.php'; ?>


<div class="row">


            <div class="col-lg-8 col-md-8 col-sm-8">
                <h3><img src="slike/novosti.png"/> NOVOSTI</h3>
                <hr class="left">
            </div>  
            </div>
	
	<?php 
				
				if(isset($_SESSION["autoriziran"])):
					?>
				
				<div class="row">
				<span class="hidden-lg hidden-md hidden-sm">	<br /></span>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
						<a class="dodaj" href="dodajn.php"><button type="button" class="btn btn-danger-dodaj">Dodaj novost</button></a>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
						<a class="dodaj" href="dodajd.php"><button type="button" class="btn btn-danger-dodaj">Dodaj događaj</button></a>
						
					</div>
					
				</div>
					<br />
					<?php
				endif;
				 ?>
				
	
	<div class="row">
			<?php
	
			
			$izraz = $veza -> prepare("select a.sifra, a.naslov,a.datum, b.datoteka from 
			vijesti a left join slika b
			on a.slika=b.sifra order by a.datum desc");	
			$izraz -> execute();
			$rezultati = $izraz -> fetchAll(PDO::FETCH_OBJ);
			foreach ($rezultati as $r):

			?>
			      
			 
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 featured-article">
                    <div class="featured-news">
                  <?php 
    $dan = substr("$r->datum", 8, 2);
    $mjesec = substr("$r->datum",5, 2 );
    $godina = substr("$r->datum", 0, 4);
    ?>

                        <div class="date"><?php echo $dan . "." . $mjesec . "." . $godina . "." ; ?></div>
         




<div class="news-image" style="background-image: url('<?php echo $putanjaApp . $r->datoteka ?>')"></div>




                        <div class="news-text-wrapper">
                            <span><?php echo $r->naslov ?></span>
                        </div>
                        <?php 
				
				if(isset($_SESSION["autoriziran"])):
					?>
						<a href="promjenanovost.php?sifra=<?php echo $r->sifra ?>"><img src="slike/promjena.png" alt="" /></a>
						<a href="obrisinovost.php?sifra=<?php echo $r->sifra ?>"><img src="slike/brisanje.png" alt="" /></a>
						<a href="galerija.php?sifra=<?php echo $r->sifra ?>"><img src="slike/slike.png" alt="" /> </a>


<?php
				endif;
				 ?>

                        <div style="margin-top: 50px;">
                           <a href="detaljin.php?sifra=<?php echo $r->sifra ?>" class="read-more">
                           		Opširnije</a>

                        </div>
                    </div>
                    
                    </div>

				
				<?php endforeach; ?>
				
				
				
				
		</div>	

<div class="row"> 

</div>













	
<div class="col-lg-10 col-md-10 col-sm-10">
                <h3><img src="slike/novosti.png"/>  DOGAĐAJI</h3>
                <hr class="left">
            </div>  

<div class="row">
			<?php
			
			
			$izraz = $veza -> prepare("select * from dogadaj order by datumvrijeme desc");	
			$izraz -> execute();
			$rezultati = $izraz -> fetchAll(PDO::FETCH_OBJ);

			foreach ($rezultati as $r):
			?>
			 
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 featured-article">
                    <div class="featured-news">
                  
                         <?php 
    $dan = substr("$r->datumvrijeme", 8, 2);
    $mjesec = substr("$r->datumvrijeme",5, 2 );
    $godina = substr("$r->datumvrijeme", 0, 4);
    ?>

                        <div class="date"><?php echo $dan . "." . $mjesec . "." . $godina . "." ; ?></div>
            <br /> <br /> 
                        <div class="news-text-wrapper-dogadaj">
                          <strong>  <span><?php echo $r->naslov ?></span></strong>
                        </div>


                       <?php if(isset($_SESSION["autoriziran"])):
					?>

					<span class="hidden-lg hidden-md hidden-sm"><br /></span> <br /><br /><br />
						<a href="promjenadogadaj.php?sifra=<?php echo $r->sifra ?>"><img src="slike/promjena.png" alt="" /></a>
						<a href="obrisidogadaj.php?sifra=<?php echo $r->sifra ?>"><img src="slike/brisanje.png" alt="" /></a>


				<?php
				endif;
				 ?>
                        <div style="">
                           <a href="detaljid.php?sifra=<?php echo $r->sifra ?>" class="read-more-dogadaj">Opširnije</a>
                        </div>
                    </div>
              
                    </div>
				
				<?php endforeach; ?>
				
				
				
				
		</div>	
	
	