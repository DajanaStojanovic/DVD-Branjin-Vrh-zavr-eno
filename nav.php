<?php include_once 'konfiguracija.php'; ?>
<?php 	include_once 'head.php';  ?>

<nav class="navbar navbar-fixed-top">
	
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="glyphicon glyphicon-align-justify"></span>
       
      </button>
    
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-left navtext">
        <li><a href="<?php echo $putanjaApp ?>index.php"><button type="button" class="btn btn-danger">Naslovnica </button></a></li>
        <li><a href="<?php echo $putanjaApp ?>onama.php"><button type="button" class="btn btn-danger">O nama</button></a></li>
         <li><a href="<?php echo $putanjaApp ?>povijest.php"><button type="button" class="btn btn-danger">Povijest</button></a></li>
         <li><a href="<?php echo $putanjaApp ?>upisnica.php"><button type="button" class="btn btn-danger">Upisnica</button></a></li>

           <li><a href="#contact" data-toggle="modal"><button type="button" class="btn btn-danger">Kontakt</button></a></li>
                    <li><a href="<?php echo $putanjaApp ?>era.php"><button type="button" class="btn btn-danger">ERA</button></a></li>

        
        
       
        		
      </ul>
       
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
 
</nav>

<a class="hidden-xs" href="index.php">
<img id="logo" class="logo" src="<?php echo $putanjaApp ?>slike/logo.png" alt="Logo DVD-a Branjin Vrh">
</a>

