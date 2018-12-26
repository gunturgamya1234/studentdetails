
<html>
<head>
<style>
body{
	  font-style:italic;
	  color:blue;
  }
	  
  </style>
  </head>
<body bgcolor="orange" align="center" color="blue">
<form  align="center" name="f1" action="validate.php" method="POST">
<marquee><h2>Welcome to Sree Vidyanikethan Educational Trust</h2></marquee>
<h2>USER LOGIN</h2>
<div  style="margin-left:400px;border:px solid black;width:500px;height:450px;">
<table  align="center">
<tr>
<td align="center">
<img src="logo1.png"  height="290" width="490" alt="image not found"><br><br>
</td>
</tr>
<tr>
<td align="center">
USERNAME<input type="text" required name="uname" maxlength="25"/><br><br>
</td>
</tr>
<tr>
<td align="center">
PASSWORD<input type="password" required name="pwd"/><br><br>
</td>
</tr>
<tr>
<td align="center">
<input type="submit" name="login" value="click">
</td>
</tr>
<tr><td align="center">
<a href="forget.php" ><h3>forgotpassword?</h3></a>
</td></tr>
</table>
</div>
</form>
</body>
</html>
<?php
session_start();
if( isset($_POST['login'])) {
		$conn=mysqli_connect("localhost", "root", "", "it");
		$user=$_POST['uname'];
		$pass=$_POST['pwd'];
		$res=mysqli_query( $conn, "SELECT * FROM register WHERE username='$user' AND password='$pass' ");
		$row = mysqli_fetch_assoc($res);
		if(!$row) {
			echo "<h1>Enter valid credentials</h1>";
		}	
		else {
	        session_start();
	        $_SESSION["user"]=$user;
			$_SESSION["pwd"]=$pass;
			header('location: usermain.php');
		}
} 
?>