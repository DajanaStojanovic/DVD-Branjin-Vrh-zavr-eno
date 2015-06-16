<?php
//add the recipient's address here
$myemail = 'dstojanovic@ffos.hr';
 
//grab named inputs from html then post to #thanks
if (isset($_POST['ime'])) {
$ime = strip_tags($_POST['ime']);
$imeoca = strip_tags($_POST['imeoca']);
$prezime = strip_tags($_POST['prezime']);
$datumrodenja = strip_tags($_POST['datumrodenja']);
$adresa = strip_tags($_POST['adresa']);
$brojtel = strip_tags($_POST['brojtel']);
$email = strip_tags($_POST['email']);
$napomene = strip_tags($_POST['napomene']);

 
//generate email and send!
$to = $myemail;
$email_subject = "Upisnica sa stranice: $prezime";
$email_body = "Primili ste novu upisnicu. ".
" \n Ime: $ime \n ".
" \n imeoca: $imeoca \n ".
" \n prezime: $prezime \n ".
" \n datumrodenja: $datumrodenja \n ".
" \n adresa: $adresa \n ".
" \n brojtel: $brojtel \n ".
" \n email: $email \n ".
" \n napomene: $napomene \n ".;
$headers = "Od: $myemail\n";
$headers .= "Odgovori na: $email";
mail($to,$email_subject,$email_body,$headers);

echo "<span class=\"alert alert-success\" >Vaša prijava je poslana. Ovo ste napisali:</span><br><br>";
echo "<stong>Ime:</strong> ".$ime."<br>";   
echo "<stong>Ime oca:</strong> ".$imeoca."<br>"; 
echo "<stong>Prezime:</strong> ".$prezime."<br>";
echo "<stong>Datum rođenja:</strong> ".$datumrodenja."<br>";
echo "<stong>Adresa:</strong> ".$adresa."<br>";
echo "<stong>Broj telefona ili mobitela:</strong> ".$brojtel."<br>";
echo "<stong>Email:</strong> ".$email."<br>";
echo "<stong>Napomene:</strong> ".$napomene."<br>";
}
?>
