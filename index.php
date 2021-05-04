<?php include 'view/header.html'; ?>
<?php
session_start();
?>
<hr>


<div class="topnav">
    
  <div class="topnav-right">
<center>
<?php // Create a login/logout link:
     if ( (isset($_SESSION['Id'])) && (!strpos($_SERVER['PHP_SELF'], 'logout.php')) ) {
	     echo '<a href="logout.php">Logout</a>';
      } else {
	     echo '<a href="signin">Sign In</a>
    <a href="controllers">Register</a>';
      }
      ?>
</center>
  </div>
</div>
<div>
<img src="./images/image1.png" alt="university" width="100%" height="500">
</div>


<?php include 'view/footer.html'; ?>