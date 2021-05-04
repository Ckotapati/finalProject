<?php

require('../model/database.php');
require('../model/student_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'signin';
    }
}

if ($action == 'signin') {   
    include('signin.php');

} else if($action=='signin_student'){
	$email= filter_input(INPUT_POST, 'email');
	$password = filter_input(INPUT_POST, 'password');
	$studentinfo = authenticate($email,$password);
	$id = $studentinfo['Id'];
	//echo "$id";
	if($id != NULL){
		session_start();
		$_SESSION['id'] = $id;	
		include('signin_student.php');
	}
	else {
		$message = "Email or password is incorrect pls try again";
	echo "<script type='text/javascript'>alert('$message');</script>";
	include('signin.php');
	}
}
else if($action == 'view_courses') {
	$courseinfo = view_courses();
	include('view_courses.php');
}
else if($action == 'view_profile') {
	session_start();
	$id=$_SESSION['id'];
	$profiledetails = stu_details($id);
	include('student_profile.php');
}
else if($action == 'enroll') {
	//session_start();
	$id = filter_input(INPUT_POST, 'ID');
	$courseID = filter_input(INPUT_POST, 'courseID');
	if($id == NULL || $id == False)
	{
		$message = "error in enrolling pls try again";
		echo "<script type='text/javascript'>alert('$message');</script>";
		enroll($id,$courseID);
		$courseinfo = view_courses();
	include('view_courses.php');
		//echo $id;
	//echo $courseID;
	}else{
	enroll($id,$courseID);
        $message = "enrolled successfully";
	echo "<script type='text/javascript'>alert('$message');</script>";
	$courseinfo = view_courses();
	include('view_courses.php');
	//header("Location: .?courseID=$courseID");
	}	
}
else if ($action == 'show_edit_form') {
    $ID = filter_input(INPUT_POST, 'ID');
    if ($ID == NULL || $ID == FALSE) {
	
		$message = "error in editing please try again";
		echo "<script type='text/javascript'>alert('$message');</script>";
		
        $edit_details = stu_details($ID);
        include('profile_edit.php');
       
    } else { 
        $edit_details = stu_details($ID);
        include('profile_edit.php');
    }
}
else if ($action == 'update_profile'){
	$Id = filter_input(INPUT_POST, 'Id');
	$name = filter_input(INPUT_POST, 'name');
	$birth_date = filter_input(INPUT_POST, 'birth_date');
	$gender = filter_input(INPUT_POST, 'gender');
	$email = filter_input(INPUT_POST, 'email');
	$password = filter_input(INPUT_POST, 'password');
	if($Id == NULL || $name == NULL || $birth_date == NULL || $gender == NULL || $email == NULL || $password == NULL)
	{
		
		$message = "error in updating profile pls try again";
		echo "<script type='text/javascript'>alert('$message');</script>";
		
	$profiledetails = stu_details($Id);
	include('student_profile.php');
	}
	else{
		profile_update($Id,$name,$birth_date,$gender,$email,$password);
		//echo "updated";
	}
}
else if ($action == 'reset_password'){
	session_start();
	$id=$_SESSION['id'];
	$profiledetails = stu_details($id);
	echo $id;
	include('reset_password.php');
}
else if ($action == 'reset'){
	session_start();
	$id=$_SESSION['id'];
	$profiledetails = stu_details($id);
	$Id = filter_input(INPUT_POST, 'Id');
	$password = filter_input(INPUT_POST, 'password');
	$opass = filter_input(INPUT_POST, 'opass');
	$npass = filter_input(INPUT_POST, 'npass');
	if($password == $opass && $opass != $npass){
		resetpassword($Id,$npass);
		$message = "password reset was successfull";
		echo "<script type='text/javascript'>alert('$message');</script>";
		include('reset_password.php');
	}
	else {
		
		$message = "Credentials are incorrect pls try again";
		echo "<script type='text/javascript'>alert('$message');</script>";
		
	}
}
else if ($action == 'enrolled_courses')
{
	session_start();
	$id=$_SESSION['id'];
	$enrolled = enrolledcourses($id);
	//print_r($enrolled);
	include('enrolled_courses.php');	
}
else if ($action =='withdraw')
{
	session_start();
	$id=$_SESSION['id'];
	$enrolled = enrolledcourses($id);
	$Id = filter_input(INPUT_POST, 'Id');
	$courseID = filter_input(INPUT_POST, 'courseID');
echo $id;echo $courseID;
	if($Id != False || $Id != NULL || $courseID != False || $courseID != NULL)
	{
	withdrawcourse($id,$courseID);
	$message = "course withdraw successfull";
	echo "<script type='text/javascript'>alert('$message');</script>";
	//echo "succesful";
	$enrolled = enrolledcourses($id);
	include('enrolled_courses.php');
	}
	else{
		
	$message = "error in withdraw of course pls try again";
	echo "<script type='text/javascript'>alert('$message');</script>";
	}
	
}
else if($action = "search_courses"){
	include('courses_search.php');
}
?>