<?php
$email = $_POST['email'];

$dataStr = file_get_contents('files/Hope.json');

$data = json_decode($dataStr, true);

if($email == $data['email']){
	$subject = "Password reset";
	$message = "Your passsword reset code is 48343";
	@mail($email, $subject, $message);
	die('Password reset code has been sent to your email');
}
else
{
	die('Email is incorrect');
}


?>