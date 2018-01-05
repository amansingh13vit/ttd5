<?php
if(!empty($_POST["name"]) && !empty($_POST["email"])) {
$to ='aman76079@gmail.com';
$subject = 'Subscription mail';
$name=$_POST['name'];
$email = $_POST['email'];
$phone=$_POST['phone'];
$message = $_POST['message'];

$message = "
<html>
<head>
<title>Tirupati Timber Subscription</title>
</head>
<body>
<p>You are subscribed to Tirupati Timber Depot.</p>
<table>
<tr>
<th>Name</th>:
<td>$name</td>
</tr>
<tr>
<th>Email</th>:
<td>$email</td>
</tr>
<th>Phone</th>:
<td>$phone</td>
</tr>
<th>Message</th>:
<td>$message</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$send = mail($to,$subject,$message,$headers);

if($send)
echo "You have subscribed successfully!";
else
echo "Subscription Failed! Contact Adminstrator..";
	}
?>