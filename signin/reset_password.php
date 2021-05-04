<?php include '../view/header.html'; ?>
<html>
<head>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>
<main>
<center>

<a href="index.php?action=view_courses">view courses</a>   &nbsp &nbsp
<a href="index.php?action=view_profile">Profile</a> &nbsp &nbsp
<a href="index.php?action=reset_password">Reset Password</a> &nbsp &nbsp
<a href="index.php?action=enrolled_courses">View Enrolled Courses</a> &nbsp &nbsp
<a href="index.php?action=search_courses">search courses</a>
&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp
<a href="logout.php">Logout</a> 

<br>
<h1 id="grad1">Reset Password</h1><br>
<form action="index.php" method="post" value = "reset">
<input type = "hidden" name = "action" value="reset">
<input type="hidden" name="Id"
               value="<?php echo $profiledetails['Id']; ?>">
<input type="hidden" name="password"
               value="<?php echo $profiledetails['password']; ?>">
	<table>
		<tr>
			<td>Enter Old Password</td>
			<td><input type = "text" name="opass" >
		</tr>
		<tr>
			<td>Enter new Password</td>
			<td><input type = "password" name="npass">
		</tr>
		
		<tr>
			<td></td>
			<td><input type = "submit" value="Reset" >
		</tr>
	</table>
</form>
</center>
</main>
</body>
</html>
<?php include '../view/footer.html'; ?>