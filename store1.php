<?php
   session_start();
   if (!isset($_SESSION["auser"])){
    header('Location:login.html');
3  }
?>
<html>
<body>
<form action="store1.php" method="POST">
<table align="center">
<tr>
<td>
<h3>USERNAME</h3>
</td>
<td>
<input type="text" required name="uname" size="10">
</td>
</tr>
<tr>
<td>
<h3>PASSWORD</h3>
</td>
<td>
<input type="password" required name="pwd" size="10">
</td>
</tr>
<tr>
<td>
<input type="submit" name="submit" value="submit">
</td>
</tr>
</table>
</form>
</body>
</html>
<?php
session_start();
 if(isset($_POST['submit']))
 {
	 $f1=$_POST['uname'];
	 $f2=$_POST['pwd'];
	 $con=new mysqli("localhost","root",'',"it");
	 $sql="insert into admin(username,password)values('$f1','$f2');";
	 if($con->query($sql)==true)
	{
	  echo "Successfully added";
	 }
     else
     {
       echo "Error in adding";
      }
	 $con->close();
 }
?> 