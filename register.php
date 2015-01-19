<?php
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('crushlist') or die(mysql_error());

$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];

$query="INSERT INTO `crushlist`.`info` (`id`, `name`, `username`, `password`, `email`) VALUES (NULL, '$name', '$username', '$password', '$email')";

if(mysql_query($query) or die(mysql_error()))
{
	header('Location:index.html');

}
?>