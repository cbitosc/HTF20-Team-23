<?php
session_start();
ini_set('display_errors',0);

if(!isset($_SESSION['login']))
{
	$_SESSION['failure1']="login here";
	die(header('Location:index.php'));
}
echo ("<h1>Welcome ".htmlentities($_SESSION['name'])."</h1>");
if(isset($_POST['row']))
{
	$str_value=array("dedication","communication skills","datastructures,algorithms,coding","No stagefear","determination");
	$wek_value=array("Not dedicated","poor coomunication skills","weak coding knowledge","stagefear","not determined");
	$res_values=array("Plan a routine <br/> set clear goals <br/> Stay determined","Watch some engish movies <br/> Communicate with others<br/> Read Novels","Practice online coding events <br/> Learn to write programs","Participate in Debates and Seminars","Develop strategies");
	$link_arr=array(
		"<a href='https://www.success.com/7-ways-to-develop-daily-discipline/'>Dedication<a/>",
		"<a href='https://www.entrepreneur.com/article/300466'>communication skills<a/>",
		"<a href='https://www.codingninjas.com/blog/2019/11/23/improve-your-coding-skills/'>Coding knowledge<a/>",
		"<a href='https://www.genardmethod.com/blog/10-fast-and-effective-ways-to-overcome-stage-fright'>overcome stage fear<a/>",
		"<a href='https://www.washington.edu/doit/taking-charge-stories-success-and-self-determination'>Determination<a/>");
$strength=array();
$weakness=array();
$row=$_POST['row'];
print_r($row);
$i=0;
for ($i=0;$i<5;$i++)
 {
if($row[$i]=="Yes")
{
	array_push($strength,$i);
}
if($row[$i]=="No")
{
	array_push($weakness,$i);
}
}
$str_arr=array();
$wek_arr=array();
$res_arr=array();
foreach ($strength as $key) {
	array_push($str_arr,$str_value[$key]);
}
foreach ($weakness as $key) {
	array_push($wek_arr,$wek_value[$key]);
	array_push($res_arr,$res_values[$key]);
}

$_SESSION['str_arr']=$str_arr;
$_SESSION['wek_arr']=$wek_arr;
$_SESSION['res_arr']=$res_arr;
$_SESSION['link_arr']=$link_arr;
header("location:main2.php");return;
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Main</title>
	<link rel="stylesheet" type="text/css" href="main1css.css">
</head>
<body>
	<a href="index.php" style="text-decoration-line: none;color:black">LOGOUT</a>
	<div class="form">
<form method="post">

<p>1. Are you determined to complete the work in time?</p>
<input type="checkbox"  name="row[]" value="Yes">
  <label for="Yes">Yes</label><br>
  <input type="checkbox"  name="row[]" value="No">
  <label for="No">No</label><br>

<p>2. Have you ever participated in group discussions?</p>
<input type="checkbox"  name="row[]" value="Yes">
  <label for="Yes">Yes</label><br>
  <input type="checkbox"  name="row[]" value="No">
  <label for="No">No</label><br>

<p>3. Have you ever participated in Hackathons or similar stuff...</p>
<input type="checkbox"  name="row[]" value="Yes">
  <label for="Yes">Yes</label><br>
  <input type="checkbox"  name="row[]" value="No">
  <label for="No">No</label><br>
<p>4. Have you ever delivered a speech on any occassion ?</p>
<input type="checkbox"  name="row[]" value="Yes">
  <label for="Yes">Yes</label><br>
  <input type="checkbox"  name="row[]" value="No">
  <label for="No">No</label><br>
  <form method="post">

<p>5. Do you beleive "Failures are stepping stones for success"?</p>
<input type="checkbox"  name="row[]" value="Yes">
  <label for="Yes">Yes</label><br>
  <input type="checkbox"  name="row[]" value="No">
  <label for="No">No</label><br>
<br/>
  <input type="submit" id="submit" name="submit">
</form>
</div>
</body>
</html>
