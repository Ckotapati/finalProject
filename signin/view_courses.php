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
<h1 id="grad1">Available courses</h1>
    <section>
        <table class = "table">
            <tr>
                
                <th>Course ID</th>
                <th>Course Name</th>
		<th>Semester</th>
		<th>Instructor</th>
		<th>Class Room</th>
		<th>Timings</th>
                <th>&nbsp;</th>
                
            </tr>
            <?php session_start();  $id = $_SESSION['id']; foreach ($courseinfo as $courseinf) : ?>
            <tr>
                <td><?php echo $courseinf['courseID']; ?></td>
                <td><?php echo $courseinf['course_name']; ?></td>
                <td><?php echo $courseinf['semester']; ?></td>
		<td><?php echo $courseinf['instructor']; ?></td>
		<td><?php echo $courseinf['classroom']; ?></td>
		<td><?php echo $courseinf['Timings']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="enroll">
			<input type="hidden" name="ID"
                           value="<?php echo $id; ?>">
                    <input type="hidden" name="courseID"
                           value="<?php echo $courseinf['courseID']; ?>">
                    <input type="submit" value="Enroll">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        
    </section>
</center>
</main>
</html>
<?php include '../view/footer.html'; ?>