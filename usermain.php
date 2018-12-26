<?php
   session_start();
   if (!isset($_SESSION["user"])){
    header('Location:login.html');
  }
?>
<html>
<head>
<frameset rows="31%,*">
<frame src="account.php" name="f1">
<frame src="userbody.php" name="f2">
</frameset>
</head>
</html>
