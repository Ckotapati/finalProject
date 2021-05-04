<?php
function register($name,$birth_date,$gender,$email,$password){
	global $db;
	$query = 'INSERT INTO student_info(name, birth_date,gender,email,password)VALUES(:name, :birth_date,:gender,:email,:password)';
	 $statement = $db->prepare($query);
    
    $statement->bindValue(':name', $name);
    $statement->bindValue(':birth_date', $birth_date);
    $statement->bindValue(':gender', $gender);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();
}
function authenticate($email,$password)
{
	global $db;
	$query = 'select * from student_info where email = :email And password = :password';
	$statement = $db->prepare($query);
	$statement->bindValue(":email", $email);
	$statement->bindValue(":password", $password);
	$statement->execute();
	$studentinfo = $statement->fetch();
	$statement->closeCursor();
	return $studentinfo;
	
}
function view_courses()
{
	global $db;
	$query = 'select * from course_info order by courseID';
	$statement = $db->prepare($query);
	$statement->execute();
	return $statement;
}
function enroll($id,$courseID)
{
	global $db;
	$query = 'INSERT INTO enrollment_details(student_id,course_id)VALUES(:id,:courseID)';
	 $statement = $db->prepare($query);
    
    $statement->bindValue(':id', $id);
    $statement->bindValue(':courseID', $courseID);
    $statement->execute();
    $statement->closeCursor();
}
function stu_details($id){
	global $db;
	$query = 'select * from student_info where Id=:id ';
	$statement = $db->prepare($query);
	$statement->bindValue(":id", $id);
	$statement->execute();
	$studentinfo = $statement->fetch();
	$statement->closeCursor();
	return $studentinfo;
}
function profile_update($Id,$name,$birth_date,$gender,$email,$password)
{
	global $db;
    $query = 'UPDATE student_info
              SET Id = :Id,
                  name = :name,
                  birth_date = :birth_date,
                  gender = :gender,
                  email = :email,
                  password = :password
               WHERE Id = :Id';
    $statement = $db->prepare($query);
    $statement->bindValue(':Id', $Id);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':birth_date', $birth_date);
    $statement->bindValue(':gender', $gender);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();
}
function resetpassword($Id,$password){
	global $db;
    $query = 'UPDATE student_info
              SET password = :password
               WHERE Id = :Id';
    $statement = $db->prepare($query);
    $statement->bindValue(':Id', $Id);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();
}
function enrolledcourses($Id){
	global $db;
	$query = 'select * from course_info 
		Right Join enrollment_details 
		ON 
		enrollment_details.course_id = course_info.courseID 
		where enrollment_details.student_id=:id';
	$statement = $db->prepare($query);
	$statement->bindValue(":id", $Id);
	$statement->execute();
	$c = $statement->fetchAll();
	$statement->closeCursor();
	return $c;
}
function withdrawcourse($Id,$courseId){
	global $db;
	 $query = 'DELETE FROM enrollment_details
              WHERE course_id = :courseid AND student_id = :studentid';
    $statement = $db->prepare($query);
    $statement->bindValue(':courseid', $courseId);
    $statement->bindValue(':studentid', $Id);
    $statement->execute();
    $statement->closeCursor();
}
function get_search_details($n){
	global $db;
	$query = 'select * from course_info 
		where courseID = :n or course_name = :n or instructor = :n';
	$statement = $db->prepare($query);
	$statement->bindValue(":n", $n);
	$statement->execute();
	$c = $statement->fetchAll();
	$statement->closeCursor();
	return $c;
}

?>