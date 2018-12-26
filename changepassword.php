<?php
   session_start();
   if (!isset($_SESSION["user"])){
    header('Location:login.html');
  }
?>
<html>
<body bgcolor="cyan">
<form  name="f1" action="changepassword.php" method="POST" >
<table align="center">
<tr>
<td align="center">
NEW PASSWORD:<input type="password" required name="pwd"/><br><br>
</td>
</tr>
<tr>
<td align="center">
CONFIRM PASSWORD:<input type="password" required name="pwd1"/><br><br>
</td>
</tr>
<tr>
<td align="center">
<button name="login" value="click">change</button>
</td>
</tr>
</table>
</body>
</html>
<?php
    $f1=$_SESSION["user"];
    if( isset($_POST['login']))
	{
		$conn=mysqli_connect("localhost", "root", "", "it");
		$pass1=$_POST['pwd'];
		$pass=$_POST['pwd1'];
		$query = mysqli_query($conn,"select * from register where username='$f1'"); 
        if (mysqli_num_rows ($query)==1) 
         {
          $query3 = mysqli_query($conn,"update register set Password='$pass' where username='$f1'"); 
          echo 'Password Changed successfully';
		  }
         else
	     {
          echo 'Error';
		 }  
}
?>