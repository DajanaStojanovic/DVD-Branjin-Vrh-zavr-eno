<?php
//add the recipient's address here
$myemail = 'dstojanovic@ffos.hr';
 
//grab named inputs from html then post to #thanks
if (isset($_POST['ime'])) {
$ime = strip_tags($_POST['ime']);
$email = strip_tags($_POST['email']);
$pitanje = strip_tags($_POST['pitanje']);

 
//generate email and send!
$to = $myemail;
$email_subject = "Kontakt od posjetitelja stranice: $ime";
$email_body = "Primili ste novo pitanje. ".
" Here are the details:\n Ime: $ime \n ".
"Email: $email\n Pitanje \n $pitanje";
$headers = "Od: $myemail\n";
$headers .= "Odgovori na: $email";
mail($to,$email_subject,$email_body,$headers);

echo "<span class=\"alert alert-success\" >Vaša poruka je poslana. Ovo ste napisali:</span><br><br>";
echo "<stong>Ime:</strong> ".$ime."<br>";   
echo "<stong>Email:</strong> ".$email."<br>"; 
echo "<stong>Pitanje:</strong> ".$pitanje."<br>";
}
?>