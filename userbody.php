<?php
   session_start();
   if (!isset($_SESSION["user"])){
    header('Location:login.html');
  }
?>
<html>
<head>
</head>
<body bgcolor="cyan">
</body>
</html>
<?php
 ?>