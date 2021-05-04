<?php include '../view/header.html'; ?>
<html>
<head>
<meta charset="utf-8">
<title>My title</title>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />

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
    <h1 id="grad1">Update/Edit Profile</h1>
    <form action="index.php" method="post" >

        <input type="hidden" name="action" value="update_profile">

        <input type="hidden" name="Id"
               value="<?php echo $edit_details['Id']; ?>">
		<table>
		<tr>
        
		<td><label>First Name: </label></td>
		<td><input type="text" name="name" value="<?php echo $edit_details['name']; ?>"/></td>
		</tr>
		<tr>
		<td><label>Date of Birth:</label></td>
		<td><input type="date" name="birth_date" value="<?php echo $edit_details['birth_date']; ?>" /></td>
		</tr>
		<tr>
		<td>Gender:</td><td><input type="text" name="gender" value="<?php echo $edit_details['gender']; ?>" /></td>
		</tr>
				
		<td>Email Address:</td><td><input type="text" name="email" value="<?php echo $edit_details['email']; ?>" /></td>
		</tr>
		<tr>
		<td>Password:</td>
		<td><input type="text" name="password" value="<?php echo $edit_details['password']; ?>" /></td>
		</tr>
		<tr>
			<td></td>
		     <td><input type="submit" name = "update" value="Update Profile"></td>
		</tr>
		</table>
	
    </form>
  
</center>
</main>
</html>
<?php include '../view/footer.html'; ?>