<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>	
    <head>
		<title>CAN in Simulation</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
        <link rel="icon" type="image/svg+xml" href="favicon.svg" sizes="any">
        <link rel="icon" href="/favicon.png" type="image/png">
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
    <body>          
        <?php 
            // define variables and set to empty values
            $toErr = $fromErr = $nameErr = $subjectErr = $messageErr = "";
            $to = $from = $name = $subject = $message = "";
            if(isset($_POST['submit'])){
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $to = "mahr.micha@gmail.com"; // this is your Email address
                    if (empty($_POST["name"])) {
                        $nameErr = "Name is required";
                    } else {
                        $name = test_input($_POST['name']);
                    }
                    $from = test_input($_POST['email']); // this is the sender's Email address
                    //$subject = test_input($_POST['category']);
                    //$subject2 = "Copy of your form submission";
                    $message = $name . " wrote the following:" . "\n\n" . test_input($_POST['textarea']);
                    //$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

                    $headers = "From:" . $from;
                    //$headers2 = "From:" . $to;
                    mail($to,$subject,$message,$headers);
                    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
                    //echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
                    //header('Location: '$_SERVER['HTTP_REFERER']);
                    //header('Location: thank_you.html');
                    //exit;
                    // You can also use header('Location: thank_you.php'); to redirect to another page.
                    // You cannot use header and echo together. It's one or the other.
                }   
            }
    
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
  </body>
</html>

