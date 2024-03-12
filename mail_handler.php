<!DOCTYPE HTML>
<html>

<head>
	<title>Mail sent</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">

	<!-- One -->
	<section id="one" class="main special">
		<div class="container">
			<span class="image fit primary calc"><img src="images/calc_main.jpg" alt="" /></span>
			<div class="content">
				
				<header class="major">
					<h2>Deine Mail wurde versendet.</h2>
				</header>
				<p>Vielen Dank für deine Nachricht. Wir melden uns so schnell es geht bei dir.</p>
				
			</div>
		</div>
	</section>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/my_own.js"></script>

    <?php
// Get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
 
$to = "mahr.micha@gmail.com";
$subject = "Mail from barefoot contact form";
 
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