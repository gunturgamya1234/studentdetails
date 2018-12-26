<html>
<body bgcolor="cyan">
<form  align="center" name="f1" action="viewmarks1.php" method="POST">
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
	$sql="select * from marks where rollno='$f1'";
	$res=$con->query($sql);
	if($res->num_rows>=1)
	{
		while($row=$res->fetch_assoc())
		{
			$a=$row['c'];
			 $b=$row['dld'];
			 $c=$row['jp'];
			 $d=$row['co'];
			 $e=$row['os'];
			 $f=$row['clab'];
			 $g=$row['IT'];
			 $h=$row['oslab'];
			 $i=$row['ssllab'];
			$total=$a+$b+$c+$d+$e+$f+$g+$h+$i;
		  echo "<div  style='margin-left:100px;border:px solid black;width:1000px;height:450px;'>";
		   echo "<table border=1>";
		   echo"<tr><td align='center'>".' <img src="svec1.ipg.jpg" /> '."</td><td><font size=4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".'SREE VIDYANIKETHAN ENGINEERING COLLEGE(Autonomous)'."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>";
		   echo "</table>";
		    echo "<table border=1>";
		   echo "<tr><td><font size='4'>". $row['studentname']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td><td><font size='4'>".'D/o||S/o'."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td><td><font size='4'>". $row['fathername']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
				<td><font size='4'>".$row['dob']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td><td><font size='4'>". $row['gender']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td></tr>";	
			echo "</table>";
			echo "<table border=1 width=100%>";
		     echo "<tr><th><i>".'Subject code'."</i></th><th><i>".'Subject name'."</i></th><th><i>".'Min marks'."</i></th><th><i>".'Max marks'."</i></th><th><i>".'Marks obtained'."</i></th><th><i>".'Remark'."</i></th></tr>";
			 echo "<tr><td>".'101'."</td><td>".'Programming in c'."</td><td>".'35'."</td><td>".'100'."</td><td>".$row['c']."</td><td></td></tr>";
			 echo "<tr><td>".'102'."</td><td>".'Digital logic design'."</td><td>".'35'."</td><td>".'100'."</td><td>".$row['dld']."</td><td></td></tr>";
			 echo "	<tr><td>".'103'."</td><td>".'Java programming'."</td><td>".'35'."</td><td>".'100'."</td><td>".$row['jp']."</td><td></td></tr>";
			echo "	<tr><td>".'104'."</td><td>".'Computer Organisation'."</td><td>".'35'."</td><td>".'100'."</td><td>".$row['co']."</td><td></td></tr>";
			echo "	<tr><td>".'105'."</td><td>".'Operating system'."</td><td>".'35'."</td><td>".'100'."</td><td>".$row['os']."</td><td></td></tr>";
			echo "	<tr><td>".'201'."</td><td>".'programming in c lab'."</td><td>".'40'."</td><td>".'100'."</td><td>".$row['clab']."</td><td></td></tr>";
			echo "	<tr><td>".'202'."</td><td>".'IT workshop'."</td><td>".'40'."</td><td>".'100'."</td><td>".$row['IT']."</td><td></td></tr>";
			echo "	<tr><td>".'203'."</td><td>".'operating system lab'."</td><td>".'40'."</td><td>".'100'."</td><td>".$row['oslab']."</td><td></td></tr>";
			echo "	<tr><td>".'204'."</td><td>".'soft skills lab'."</td><td>".'40'."</td><td>".'100'."</td><td>".$row['ssllab']."</td><td></td></tr>";
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
	
