<?php
   session_start();
   if (!isset($_SESSION["auser"])){
    header('Location:login.html');
  }
?>
<html>
<body bgcolor="cyan">
	<form action="entermarks.php" method="POST">

		<table  align="center">
			<caption>STUDENT MARKSHEET FORM</caption>
			<tr>
				<td>Roll No:</td>
				<td><input type=text required name="rn" size=30></td>
			</tr>
			<tr>
				<td>School Name</td>
				<td><input type=text required name="sn" size=30></td>
			</tr>

			<tr>
				<td>Student Name</td>
				<td><input type=text  required name="stn" size=30></td>
			</tr>

			<tr>
				<td>Father's Name</td>
				<td><input type=text required name="fn" size=30></td>
			</tr>

			<tr>
				<td>Dob</td>
				<td><input type=text required name="dob" size=30></td>
			</tr>

			<tr>
				<td>Gender</td>
				<td><input type=radio name="gen" size=30 value="Male">Male<input type=radio name="gen" size=30 value="Female">Female</td>
			</tr>

			<tr>
				<td>programming in c</td>
				<td><input type=text name="a" size=30></td>
			</tr>

			<tr>
				<td>digital logical design</td>
				<td><input type=text required name="b" size=30></td>
			</tr>

			<tr>
				<td>java programming</td>
				<td><input type=text required name="c" size=30></td>
			</tr>

			<tr>
				<td>computer organisation</td>
				<td><input type=text required name="d" size=30></td>
			</tr>

			<tr>
				<td>operating system</td>
				<td><input type=text required name="e" size=30></td>
			</tr>
			<tr>
				<td>programming in c lab</td>
				<td><input type=text required name="f" size=30></td>
			</tr>
			<tr>
				<td>IT workshop</td>
				<td><input type=text required name="g" size=30></td>
			</tr>
			<tr>
				<td>operating system lab</td>
				<td><input type=text required name="h" size=30></td>
			</tr>
			<tr>
				<td>soft skills lab</td>
				<td><input type=text required name="i" size=30></td>
			</tr>
			<tr>
			<td align="center">
		<input type="submit" value="submit" name="submit">
      <input type="reset" value="reset">
	  </td>
	  </tr>
	  </table>
	</form>
</html>
<?php
session_start();
 if(isset($_POST['submit']))
 {
	 $f1=$_POST['rn'];
	 $f2=$_POST['sn'];
	 $f3=$_POST['stn'];
	 $f4=$_POST['fn'];
	 $f5=$_POST['dob'];
	 $f6=$_POST['gen'];
	 $f7=$_POST['a'];
	 $f8=$_POST['b'];
	 $f9=$_POST['c'];
	 $f10=$_POST['d'];
	 $f11=$_POST['e'];
	 $f12=$_POST['f'];
	 $f13=$_POST['g'];
	 $f14=$_POST['h'];
	 $f15=$_POST['i']; 
	 $con=new mysqli("localhost","root",'',"it");
	 $sql="insert into marks(rollno,schoolname,studentname,fathername,dob,gender,c,dld,jp,co,os,clab,IT,oslab,ssllab) values('$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8','$f9','$f10','$f11','$f12','$f13','$f14','$f15');";
	 if($con->query($sql)==true)
	 {
		 echo "successfully added";
	 }
	 else
	 {
		 echo "Error:".$sql."<br>".$con->error;
	 }
	  $con->close();
 }
 ?>