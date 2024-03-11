<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Vielen Dank, wir haben deine Mail erhalten und werden uns schnellstmöglich bei dir melden.</h1>

<?php
// Get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
 
$to = "mahr.micha@gmail.com";
$subject = "Mail from barefoot website";
 
// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message 
$txt = $name . " schreibt dir.". "\r\nMeine Email = "
    . $email . "\r\nNachricht:" . "\r\n\r\n" . $message;
 
$headers = "From: info@barefoot-games.com";
if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
 
// Redirect to
header("Location:index.html#two");
?>
</body>
</html>