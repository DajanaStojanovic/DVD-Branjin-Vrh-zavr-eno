<?php include_once 'konfiguracija.php'; 

if(!isset($_GET['sifra']) && !isset($_POST['sifra'])){
    header("location: index.php");
}

  function reArrayFiles(&$file_post) {

    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_ary;
}
           




if (isset($_FILES['files'])) {
    $file_ary = reArrayFiles($_FILES['files']);

    foreach ($file_ary as $file) {
           $target_dir = "/slike/";
            $target_file = $target_dir . basename($file["name"]);
            move_uploaded_file($file["tmp_name"], $target_file);

            $izraz = $veza -> prepare("insert into slika(datoteka) values ('$target_file')"); 
            $izraz -> execute();
            $zadnjaslika = $veza->lastInsertId();




            $izraz = $veza->prepare("insert into slika_vijest (vijest,slika) values (:vijest,:slika)");
            $izraz->bindParam(":vijest", $_POST['sifra']);
            $izraz->bindValue(":slika", $zadnjaslika);
            
            

            $izraz->execute();
            $sifra = $_POST['sifra'];
         }
     
         
            
     //na serveru dati ovlasti 777 direktoriju gdje se spremaju slike (filezilla desni klin na dir)
         
}


           
            


?>
<!doctype html>
<html>
<head>
    <?php   include_once 'head.php';  ?>
 
    </head>
<body>
    
    <?php   
    include_once 'nav.php'; 
     ?>
     <span class="hidden-lg "><br /> <br /></span>

<form id="fileupload" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST" enctype="multipart/form-data">
        <!-- Redirect browsers with JavaScript disabled to the origin page -->
        <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/">

        </noscript>
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="row fileupload-buttonbar">
        <div class="col-lg-4 col-md-4 col-sm-4"></div>
            <div class="col-lg-7 col-md-7 col-sm-7">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-danger fileinput-button">
                    <img src="slike/dodaj.png" alt="" />
                    <span>Dodaj slike</span>
                    <input type="file" name="files[]" multiple>
                </span>
                <span class="hidden-sm hidden-lg hidden-md"><br /> <br /></span>
                <button type="submit" class="btn btn-danger start">
                    <img src="slike/ucitaj.png" alt="" />
                    <span>Učitaj</span>
                </button>
                <span class="hidden-sm hidden-lg hidden-md"><br /> <br /></span>
                <button type="reset" class="btn btn-danger cancel">
                     <img src="slike/ponisti.png" alt="" />

                    <span>Poništi učitavanje</span>
                </button>
             </div>
                </form> 
            <input type="hidden" name="sifra" value="<?php echo $_GET['sifra']; ?>" />  

          <form id="filedelete" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST" enctype="multipart/form-data">

         <div class="row">
         <div class="col-lg-3 col-sm-3 col-md-3"></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">  <br />   <?php 
                  $izraz = $veza -> prepare("select c.sifra, c.datoteka from 
                    vijesti a left join slika_vijest b
                    on a.sifra=b.vijest left join slika c
                    on c.sifra=b.slika
                    where a.sifra=:sifra"); 
                    $izraz->bindParam(":sifra",$_GET["sifra"]);
                  $izraz -> execute();
                  $rezultati = $izraz -> fetchAll(PDO::FETCH_OBJ);
                  foreach ($rezultati as $r)

                  
                    {echo ' <img src="' . $r->datoteka . '" class="img-responsive" />
               
               ';  } 
                              ?>

            </div></div>
            </form>
            <input type="hidden" name="sifra" value="<?php echo $_GET['sifra']; ?>" />  

            
<br /><br />
    <script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- blueimp Gallery script -->
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="js/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="js/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<script src="js/main.js"></script>




    

<?php   
    include_once 'contact.php';  
     include_once 'podnozje.php';
    include_once 'script.php';  
?>


</body>
</html>