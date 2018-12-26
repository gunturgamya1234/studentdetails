<html>
<body bgcolor="cyan">
<form  align="center" name="f1" action="viewmarks.php" method="POST">
<table  align="center">
<tr>
<td>
<input type="text" placeholder="Rollno" required name="rollno" size="30">
</td>
<td>
<input type="submit" value="submit" name="submit">
</td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
 { 
    $f1=$_POST['rollno'];
	$con=new mysqli("localhost","root",'',"it");
	$sql="select * from marks1 where rollno='$f1'";
	$res=$con->query($sql);
	if($res->num_rows>=1)
	{
		while($row=$res->fetch_assoc())
		{
			$a=$row['ds'];
			 $b=$row['toc'];
			 $c=$row['dbms'];
			 $d=$row['se'];
			 $e=$row['linux'];
			 $f=$row['linuxlab'];
			 $g=$row['dslab'];
			 $h=$row['dbmslab'];
			 $i=$row['caed'];
			$total=$a+$b+$c+$d+$e+$f+$g+$h+$i;
		  echo "<div  style='margin-left:100px;border:px solid black;width:1000px;height:450px;'>";
		   echo "<table border=1>";
		   echo"<tr><td align='center'>".' <img src="svec1.ipg.jpg" /> '."</td><td><font size=4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".'SREE VIDYANIKETHAN ENGINEERING COLLEGE(Autonomous)'."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>";
		   echo "</table>";
		    echo "<table border=1>";
		   echo "<tr><td><font size='4'>". $row['studentname']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td><td><font size='4'>".'D/o||S/o'."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td><td><font size='4'>". $row['fathername']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
				<td><font size='4'>".$row['dob']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td><td><font size='4'>". $row['gender']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>";	
			echo "</table>";
			echo "<table border=1 width=100%>";
		     echo "<tr><th><i>".'Subject code'."</i></th><th><i>".'Subject name'."</i></th><th><i>".'Min marks'."</i></th><th><i>".'Max marks'."</i></th><th><i>".'Marks obtained'."</i></th><th><i>".'Remark'."</i></th></tr>";
			 echo "<tr><td>".'301'."</td><td>".'Data structures'."</td><td>".'35'."</td><td>".'100'."</td><td>".$row['ds']."</td><td>".'pass'."</td></tr>";
			 echo "<tr><td>".'302'."</td><td>".'Theory of computation'."</td><td>".'35'."</td><td>".'100'."</td><td>".$row['toc']."</td><td>".'pass'."</td></tr>";
			 echo "	<tr><td>".'303'."</td><td>".'Database Management systems'."</td><td>".'35'."</td><td>".'100'."</td><td>".$row['dbms']."</td><td>".'pass'."</td></tr>";
			echo "	<tr><td>".'304'."</td><td>".'Software Engineering'."</td><td>".'35'."</td><td>".'100'."</td><td>".$row['se']."</td><td>".'pass'."</td></tr>";
			echo "	<tr><td>".'305'."</td><td>".'Linux programming'."</td><td>".'35'."</td><td>".'100'."</td><td>".$row['linux']."</td><td>".'pass'."</td></tr>";
			echo "	<tr><td>".'401'."</td><td>".'Linux programming lab'."</td><td>".'40'."</td><td>".'100'."</td><td>".$row['linuxlab']."</td><td>".'pass'."</td></tr>";
			echo "	<tr><td>".'402'."</td><td>".'Datastructures lab'."</td><td>".'40'."</td><td>".'100'."</td><td>".$row['dslab']."</td><td>".'pass'."</td></tr>";
			echo "	<tr><td>".'403'."</td><td>".'Database Management Systemslab'."</td><td>".'40'."</td><td>".'100'."</td><td>".$row['dbmslab']."</td><td>".'pass'."</td></tr>";
			echo "	<tr><td>".'404'."</td><td>".'CAED'."</td><td>".'40'."</td><td>".'100'."</td><td>".$row['caed']."</td><td>".'pass'."</td></tr>";
			echo "<tr><td></td><td>".'Total'."</td><td><b></b></td><td><b>".'900'."</b></td><td><b>$total<b></td><td></td></tr>";
			echo "</table>";
			echo "</div>";
		}
	}
	else
	{
		echo "records not found";
	}
 }
 ?>
 </body>
 </html>
	
