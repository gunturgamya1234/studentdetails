<?php
   session_start();
   if (!isset($_SESSION["user"])){
    header('Location:login.html');
  }
?>
<html>
<body bgcolor="cyan" align="center">
<h3>PERSONAL DETAILS</h3>
<?php 
if(isset($_SESSION["user"]))
 { 
    $f1=$_SESSION["user"];
	$con=new mysqli("localhost","root",'',"it");
	$sql="select * from details where rollno='$f1'";
	$res=$con->query($sql);
	if($res->num_rows>=1)
	{
		echo "<table border=2 align='center' >";
		echo "<tr><th>FirstName</th><th>LastName</th><th>UserName</th><th>Course</th><th>Gender</th><th>Email</th><th>DateofBirth</th></tr>";
		while($row=$res->fetch_assoc())
		{
			echo"<tr><td>".$row['fname']."</td><td>".$row['lname']."</td><td>".$row['uname']."</td><td>".$row['course']."</td><td>".$row['gender']."</td><td>".$row['emailid']."</td><td>".$row['dob']."</td></tr>";
		}
		echo "</table>";
	}
	else
	{
		echo "No records found";
    }
 }
?>	
</body>
</html>