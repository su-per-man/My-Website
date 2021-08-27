<?php
if(isset($_POST["name"]))
{
	$to = "rockz.suman.kumar@gmail.com";
	$subject = "MAIL FROM MY SITE";
	$txt= "
<html>
<head>
<title>MAIL FROM MY SITE</title>
</head>
<body>
".$_POST["name"].", ".$_POST["mail"].", : \n
".$_POST["msg"]."
</body>
</html>
	";
	
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	if(mail($to,$subject,$txt,$headers)==true)
		echo "Sent";
	else
		echo "Failed";
}
else
	echo "Error";
?>