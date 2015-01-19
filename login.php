<?php
session_start();
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('crushlist') or die(mysql_error());

$username=$_POST['username'];
$password=$_POST['password'];

$query="SELECT *  FROM `info` WHERE `username` LIKE '$username' AND `password` LIKE '$password'";

$result=mysql_query($query);
$rows=mysql_num_rows($result);
if($rows>0)
{
	
	$row=mysql_fetch_array($result);
	$_SESSION['name']=$row['name'];
	$_SESSION['username']=$row['username'];
	header('Location:profile.php');
}
else
{
	echo "not welcome";
	
}
?>
