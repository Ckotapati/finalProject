<?php

require('../model/database.php');
require('../model/student_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'register';
    }
}

if ($action == 'register') {   
    include('register.php');

} else if($action=='register_student') {

	$name = filter_input(INPUT_POST,'name');
	$birth_date = filter_input(INPUT_POST,'birth_date');
	$gender = filter_input(INPUT_POST,'gender');
	$email = filter_input(INPUT_POST,'email');
	$password = filter_input(INPUT_POST,'password');
	$repassword = filter_input(INPUT_POST,'repassword');
	
	
	if($name == NULL || $birth_date==NULL || $gender == NULL || $email == NULL || $password == NULL || $password != $repassword || $name == False || $birth_date==False || $gender == False || $email == False || $password == False)
	{
		$message = "error in given input pls try again";
	echo "<script type='text/javascript'>alert('$message');</script>";
		include('register.php');
	}
	else{
		register($name,$birth_date,$gender,$email,$password);
		include("registered.php");
	}
}


?>