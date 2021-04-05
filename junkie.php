<?php 
session_start();
header("Location: junk.php");

$_SESSION["message"] = "";

if(!empty($_POST["number"]))
{
	if($_POST["number"] > $_SESSION["rand"])
	{
		$_SESSION["message"] = "Number is Too High!";
	}
	else if($_POST["number"] < $_SESSION['rand'])
	{
		$_SESSION["message"] = "Number is Too Low!";
	}
	else
	{
		$_SESSION["message"] = $_SESSION["rand"] . " is the correct number!";
		$_SESSION["og"] = "finished";
	}
}
if(!empty($_SESSION["reset"]))
{
	session_destroy();
}
?>