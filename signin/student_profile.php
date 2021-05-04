<?php include '../view/header.html'; ?>
<html>
<head>
<meta charset="utf-8">
<title>My title</title>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />

</head>
<body>
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
    <h1 id="grad1">Profile Information</h1>

    <section>
        <table>
            <tr>
                
                <th>ID</th><td><?php echo $profiledetails['Id']; ?></td></tr>
                <tr><th>Name</th><td><?php echo $profiledetails['name']; ?></td></tr>
		<tr><th>Date of Birth</th><td><?php echo $profiledetails['birth_date']; ?></td></tr>
		<tr><th>Gender</th><td><?php echo $profiledetails['gender']; ?></td></tr>
		<tr><th>Email</th><td><?php echo $profiledetails['email']; ?></td></tr>
		<tr><th>Password</th><td><?php echo $profiledetails['password']; ?></td></tr>
                <th>&nbsp;</th><form action="." method="post"><td><input type="hidden" name="action"
                           value="show_edit_form">
                    <input type="hidden" name="ID"
                           value="<?php echo $profiledetails['Id']; ?>">
                    <input type="submit" value="Edit"></form></td>
        </table>
        
    </section>
</center>
</main>
</body>
</html>
<?php include '../view/footer.html'; ?>