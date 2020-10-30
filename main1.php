<?php
session_start();
if(!isset($_SESSION['login']))
{
	$_SESSION['failure1']="login here";
	die(header('Location:index.php'));
}
echo ("<h1>Welcome ".htmlentities($_SESSION['name'])."</h1>");



?>
<!DOCTYPE html>
<html>
<head>
	<title>Main</title>
</head>
<body>

</body>
</html>
