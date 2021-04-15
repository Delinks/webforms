<?php

$email = $_POST['email'];
$password = $_POST['password'];

$dataStr = file_get_contents('files/Hope.json');

$data = json_decode($dataStr, true);

if($password == $data['password'] && $email == $data['email']){
	die('Login successful');
}
else
{
	die('Incorrect login details');
}

?>