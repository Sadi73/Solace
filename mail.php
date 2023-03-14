<?php


$address="info@solace.one";
$subject= "Name: ".$_POST['name'].", Email: ".$_POST['email'];
$msg=$_POST['message'];


mail($address, $subject, $msg);


?>

<html>
<head>
	<link rel="stylesheet"  href="mail.css">
</head>

<body>
	<div>
		<p>Your mail has been sent to "info@solace.one".</p>
	<p>Thank you for your response.</p>
	<p><a href="index.html">GO PREVIOUS PAGE</a></p>

	</div>
	
</body>




</html>
