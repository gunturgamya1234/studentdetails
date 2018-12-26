<?php
   session_start();
   if (!isset($_SESSION["user"])){
    header('Location:login.html');
  }
?>
<html>
<head>
<style>
  h2{
	  font-family:monoscope;
	  color:deeppink;
  }
  h3{
	  color:brown;
  }
 
	.button {
    background-color: #4CAF50; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
.b{
	background-color:cyan;
}
  </style>
</head>
<body bgcolor="cyan">
<table width="100%">
<tr>
<td>
<img src="svec1.ipg.jpg"  height="100" width="150" alt="image not found">
<td align="center">
<h2>SREE VIDYANIKETHAN ENGINEERING COLLEGE(Autonomous)</h2>
</td>
<td>
<h3>Welcome <?php echo $_SESSION['user'] ?></h3> 
</td>
</tr>
</table>
<div  style="margin-left:0px;border:1px solid black;height:60px;background-color:deeppink;">
<table width=100%>
<tr>
<td>
<a href="usermain.php" target="usermain" ><button name="b1" value="click"class="b" ><h4>Home  </h4></button></a>
</td>
<td>
<a href="retrievedetails.php" target="f2" ><button name="b2" value="click"class="b" ><h4>view personal details</h4></button></a>
</td>
<td>
<a href="new.php"target="f2" ><button name="b2" value="click" class="b" ><h4>AboutCourse</h4></button></a>
</td>
<td>
<a href="select.php"target="f2" ><button name="b2" value="click" class="b"><h4>ExamResults</h4></button></a>
</td>
<td>
<a href="help.php" target="f2"><button name="b2" value="click" class="b"><h4>Help  </h4></button></a>
</td>
<td>
<a href="changepassword.php" target="f2"><button name="b2" value="click" class="b"><h4>Change password </h4></button></a>
</td>
<td>
<a href="logout.php" target="main"><button name="b2" value="click"class="b"><h4>Logout</h4></button></a>
</td>
</tr>
</table>
</div>
</body>
</html>