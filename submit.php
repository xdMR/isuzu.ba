<?php
// if the url field is empty, but the message field isn't
if(isset($_POST['url']) && $_POST['url'] == '' && $_POST['message'] != ''){

	// put your email address here
	//$youremail = 'woltez@gmail.com, natashawolt@gmail.com';

	$youremail = 'woltez@gmail.com';

	$body = "Isuzu.ba - Novi upit od:
	Name:  $_POST[name]
	E-Mail: $_POST[email]
	Poruka: $_POST[message]";


	if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[email]";
	} else {
	  $headers = "From: $youremail";
	}

	// finally, send the message
	mail($youremail, 'Isuzu.ba - Novi upit od '."$_POST[name]" , $body, $headers );

}


header('Location: https://www.isuzu.ba/hvala.html');
exit('Redirecting you to  https://www.isuzu.ba/hvala.html');

?>
<!DOCTYPE HTML>
<html>
<head>

<title>Thanks!</title>

</head>
<body>

<h1>Thanks</h1>
<p>We'll get back to you as soon as possible.</p>

</body>
</html>