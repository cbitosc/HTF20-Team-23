<?php
ini_set('display_errors',0);

session_start();
if(strlen($_POST['name'])>0)
{
	$_SESSION['name']=$_POST['name'];
	$_SESSION['success']="Login Successful";
	$_SESSION['login']=true;
	header('Location:main1.php?name='.htmlentities($_SESSION['name']));
	return;

}
else{
	$_SESSION['failure']="enter name";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>app</title>
	<link rel="stylesheet" type="text/css" href="indexcss.css">
</head>
<body>
	<div class=form>
<form method="post">
	<h3 id="headin">Login</h3>
<?php

if(isset($_SESSION['failure'])){
		echo ('<p style="color:red;">'.htmlentities($_SESSION['failure'])."</p>");
		unset($_SESSION['failure']);
	} 
	if(isset($_SESSION['failure1'])){
		echo ('<p style="color:red;">'.htmlentities($_SESSION['failure1'])."</p>");
		unset($_SESSION['failure1']);
	} ?>
<p>Name:</p><input type="text" name="name" autofocus placeholder="Name">
<br><br>
<p>Gender:</p><input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
<p>Age:</p><input type="number" name="age">
<p>Qualification:</p><input type="text" name="">
<br/><br/>
<input type="submit" name="submit" value="  Login  " id="submit">
</form>
</div>
</body>
</html>


