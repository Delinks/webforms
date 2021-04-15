<?php
//if(isset($_post['submit'])) {
$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$dob = $_POST['dob'];
	$email = $_POST['email'];
	$password = $_POST['password'];


	$array_data =[
		'first_name' => $first_name,
		'last_name' => $last_name,
		'dob' => $dob,
		'email' => $email,
		'password' => $password,


	];

	//echo $first_name . $last_name . $dob . $email; . $password; exit;

	file_put_contents('files/'. $array_data['first_name'] . ".json" , json_encode($array_data));
	die('Registration successful');
//}


 ?>