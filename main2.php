<?php
session_start();
ini_set('display_errors',0);

if(!isset($_SESSION['login']))
{
	$_SESSION['failure1']="login here";
	die(header('Location:index.php'));
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Main2</title>
	<link rel="stylesheet" type="text/css" href="main2css.css">
</head>
<body>
<div class="div">
<h2>From the past data we made following conclusions:</h2>
<?php
echo("<h3>Strenghts:</h3>");
foreach ($_SESSION['str_arr'] as $key) {
	echo ("<p style='color:green;'>".$key."<p/>");
}
echo "<br/>";
echo("<h3>Weakness:</h3>");
foreach ($_SESSION['wek_arr'] as $key) {
	echo ("<p style='color:red;'>".$key."<p/>");
}
echo("<br/>");
?>
</div>
<br/>
<div class="div">
<h1>The following recommendations might help you to overcome your weakness:</h1>
<?php
foreach ($_SESSION['res_arr'] as $key) {
	echo ("<h2 style='color:skyblue'>".$key."</h2>");
}
echo("</div><br/><div class='div'>");
echo("<h1>The following URL\'s might help you further more:</h1></br>");
foreach ($_SESSION['link_arr'] as $key) {
	echo ($key."<br/>");
}
?>
<br/>
<br/>
<a href="main1.php" style="text-decoration-line: none;color:white">Return to first page</a>
<br/>
<a href="index.php" style="text-decoration-line: none;color:white">LOGOUT</a>
</div>
</body>
</html>