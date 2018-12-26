<?php
   session_start();
   if (!isset($_SESSION["auser"])){
    header('Location:login.html');
  }
?>
<html>
<body bgcolor="cyan">
<form  align="center" name="f1" action="details.php" method="POST">
<table  align="center">
<caption><h1>personal details</h1></caption>
<tr>
<td>
<h3>FirstName:</h3>
</td>
<td>
<input type="text" required name="Firstname" size="30">
</td>
</tr>
<tr>
<td>
<h3>LastName:</h3>
</td>
<td>
<input type="text" required name="Lastname" size="30">
</td>
</tr>
<tr>
<td>
<h3>Username:</h3>
</td>
<td>
<input type="text" required name="Username" size="30" maxlength="10">
</td>
</tr>
<tr>
<td>
<h3>Rollnumber</h3>
</td>
<td>
<input type="text" required name="rollno" size="30">
</td>
</tr>
<tr>
<td>
<h3>course</h3>
</td>
<td>
<input type="text" required name="course" size="30" maxlength="10">
</td>
</tr>
<tr>
<td>
<h3>Gender:</h3>
</td>
<td>
<h5>Male<input type="radio" name="Gender" value="Male"></h5>
<h5>Female<input type="radio" name="Gender" value="Female"></h5>
</td>
</tr>
<tr>
<td>
<h3>Mail ID:</h3>
</td>
<td>
<input type="email" name="Mailid" size="30">
</td>
</tr>
<tr>
<td>
<h3>DateOfbirth:</h3>
</td>
<td>
<input type="date" name="Date" size="30">
</td>
</tr>
</table>
<input type="submit" value="submit" name="submit">
<input type="reset" value="reset">
</form>
</body>
</html>
<?php
 if(isset($_POST['submit']))
 {
    $f1=$_POST['Firstname'];
	$f2=$_POST['Lastname'];
	$f3=$_POST['Username'];
	$f4=$_POST['rollno'];
	$f5=$_POST['course'];
	$f6=$_POST['Gender'];
	$f7=$_POST['Mailid'];
	$f8=$_POST['Date'];
	$con=new mysqli("localhost","root",'',"it");
	$sql="insert  into details(fname,lname,uname,rollno,course,gender,emailid,dob) values('$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8');";
	if($con->query($sql)==true)
	{
	  echo "Inserted successfully";
	 }
     else
     {
       echo "Error in inserting";
      }
  $con->close();
}
?>  