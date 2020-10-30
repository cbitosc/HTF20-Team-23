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
</head>
<body>
<form method="post">
<?php
if(isset($_SESSION['failure'])){
		echo ('<p style="color:red;">'.htmlentities($_SESSION['failure'])."</p>");
		unset($_SESSION['failure']);
	} 
	if(isset($_SESSION['failure1'])){
		echo ('<p style="color:red;">'.htmlentities($_SESSION['failure1'])."</p>");
		unset($_SESSION['failure1']);
	} ?>
<p>Name:</p><input type="text" name="name" autofocus>
<p>Gender:</p><input type="radio" value="Male"><label>Male</label><input type="radio" value="Female"><label>Female</label>
<p>Age:</p><input type="number" name="age">
<p>Qualification:</p><input type="" name="">
<input type="submit" name="submit">
</form>
</body>
</html>


