<?php include '../view/header.html'; ?>
<html>
<head>
<meta charset="utf-8">
<title>My title</title>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body id="grad1">
<br><br>
<center>
<h2 id="grad1">Student Login</h2><br>
<form action="index.php" method="post" value = "signin_student">
<input type = "hidden" name = "action" value="signin_student">
	<table>
		<tr>
			<td>Enter Email</td>
			<td><input type = "text" name="email" >
		</tr>
		<tr>
			<td>Enter Password</td>
			<td><input type = "password" name="password">
		</tr>
		<tr>
			<td></td>
			<td><input type = "submit" value="Login" >
		</tr>
	</table>
</form>
</center>
</body>
</html>
<?php include '../view/footer.html'; ?>