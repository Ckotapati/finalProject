<?php include '../view/header.html'; ?>

<html>
<head>
<meta charset="utf-8">
<title>My title</title>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<main>

    
<center>
<br>
<a href="index.php?action=view_courses">view courses</a>   &nbsp &nbsp
<a href="index.php?action=view_profile">Profile</a> &nbsp &nbsp
<a href="index.php?action=reset_password">Reset Password</a> &nbsp &nbsp
<a href="index.php?action=enrolled_courses">View Enrolled Courses</a> &nbsp &nbsp
<a href="index.php?action=search_courses">search courses</a>
&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp
<a href="logout.php">Logout</a> 
<br>
<h1 id="grad1">Enrolled courses</h1>
    <section>
        <table class="table">
            <tr>
                
                <th>Course ID</th>
                <th>Course Name</th>
		<th>Semester</th>
		<th>Instructor</th>
		<th>Class Room</th>
		<th>Timings</th>
                <th>&nbsp;</th>
                
            </tr>
            <?php foreach ($enrolled as $enroll) : ?>
            <tr>
                <td><?php echo $enroll['courseID']; ?></td>
                <td><?php echo $enroll['course_name']; ?></td>
                <td><?php echo $enroll['semester']; ?></td>
		<td><?php echo $enroll['instructor']; ?></td>
		<td><?php echo $enroll['classroom']; ?></td>
		<td><?php echo $enroll['Timings']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action" value="withdraw">
			<input type="hidden" name="ID" value="<?php echo $enroll['student_id']; ?>">
                    <input type="hidden" name="courseID" value="<?php echo $enroll['courseID']; ?>">
                    <input type="submit" value="withdraw">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        
    </section>
</center>
</main>
</html>
<?php include '../view/footer.html'; ?>