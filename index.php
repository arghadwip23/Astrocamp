<center><h1> Helo arghadwip tumi amar hero 🥳<h1><center>
<?php
$to = "arghadwip23@gmail.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <arghdwip24@gmail.com>' . "\r\n";
$headers .= 'Cc: sarkarraja852@gmail.com' . "\r\n";
$mail = mail($to,$subject,$message,$headers);
/*if($mail== true){
echo("<h1>email sent you got it</h1>");
}else{
echo("<h1>sorry you failed</h1>")
}*/
?>
