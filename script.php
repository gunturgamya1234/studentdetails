<html>
<head>
<script language="javascript">
function unvalidate()
{
	var u=f1.uname.value;
	if(u.length<10||u.length>10)
	{
		alert(" USERNAME should be 10 characters");
	}
}
function validate()
{
	var u=f1.uname.value;
	var p=f1.pwd.value;
	if(u==''||p=='')
	{
		alert("please fill details");
	}	
}	
	
</script>		
<body bgcolor="cyan">
<form action="script.php" method="POST" name="f1">
<table align="center">
<tr>
<td>
<h3>USERNAME</h3>
</td>
<td>
<input type="text"  required placeholder="Should Be 10 Characters" name="uname" size="30" onblur="unvalidate()"><span id="uid" style="color:red"></span>
</td>
</tr>
<tr>
<td>
<h3>PASSWORD</h3>
</td>
<td>
<input type="password" required name="pwd" size="30" >
</td>
</tr>
<tr>
<td align="center">
<input type="submit" name="submit" value="submit" >
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
	 $sql="insert into register(username,password)values('$f1','$f2');";
	 if($con->query($sql)==true)
	{
	  echo "Inserted successfully";
	 }
     else
     {
       echo "Already registered";
      }
	 $con->close();
 }
?> 
