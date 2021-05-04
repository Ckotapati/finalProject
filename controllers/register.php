<?php include '../view/header.html'; ?>
<html>
<head>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>
<br><br>
<center>
<h2>Student Registration</h2><br>
<form action="index.php" method="post" value = "register_student">
<input type = "hidden" name = "action" value="register_student">
	<table>
		<tr>
			<td>Enter Name</td>
			<td><input type = "text" name="name">
		</tr>
		<tr>
			<td>Date of Birth</td>
			<td><input type ="date" name="birth_date">
		</tr>
		<tr>
			<td>Choose Gender</td>
			<td><input type="radio" id="male" name="gender" value="male">Male
				<input type="radio" id="female" name="gender" value="female">Female
			</td>

		</tr>
		<tr>
			<td>Enter Email</td>
			<td><input type = "text" name="email" >
		</tr>
		<tr>
			<td>Enter Password</td>
			<td><input type = "password" name="password">
		</tr>
		<tr>
			<td>Re-Enter Password</td>
			<td><input type = "password" name="repassword">
		</tr>
		<tr>
			<td></td>
			<td><input type = "submit" value="Register" >
		</tr>
	</table>
</form>
</center>
</body>
</html>
<?php include '../view/footer.html'; ?>