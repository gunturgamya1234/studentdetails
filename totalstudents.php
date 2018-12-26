<?php
   session_start();
   if (!isset($_SESSION["auser"])){
    header('Location:login.html');
  }
?>
<html>
<body bgcolor="cyan">
</body>
</html>
<?php
$con=new mysqli("localhost","root",'',"it");
	 $sql="select * from register";
	 $res=$con->query($sql);
	 if($res->num_rows>=1)
	 {
		 echo "<table  border=2 >";
		 echo "<tr><th>USERNAME</th><th>PASSWORD</th></tr>";
		 while($row=$res->fetch_assoc())
		 {
			 echo "<tr><td>".$row['username']."</td><td>".$row['password']."</td></tr>";
		 }
         echo "</table>";
	 }
     else
	 {
       echo "No records found";
	 }
?>	 