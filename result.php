<?php
session_start();
if(!isset($_SESSION['login']))
{
	$_SESSION['failure1']="login here";
	die(header('Location:index.php'));
}