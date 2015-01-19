<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">

	
<html>
<?php 
session_start();

?>

<head>
		<title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
	<body>


	<h1><strong>Soulmet</strong></h1>
	
	<br>
<div>
	  
    <?php 
	mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('crushlist') or die(mysql_error());

	
	
	
$qry="select * from crush_list a,info b  where uska_crush like '$_SESSION[username]' and a.username=b.username and a.username
in (select uska_crush from crush_list where username like '$_SESSION[username]' )
";
	$rs=mysql_query($qry);
	
		if(!$rs)
	{
		die("Error".mysql_error());
		}
		else
			{	
			
			
			
echo "<div>Your Crush's Status<table>";
			
		while(	$row=mysql_fetch_array($rs))
		{
			if($row["name"]!="")
			echo " <tr><td>$row[name]<td>also have a crush on you, go and chat ,  Here is the email id $row[email] !!!! ";
			else
			echo "safsdfsdff";
		
		}
		
echo "</table>";
	
			}
	
	
	?>


    </div>
</body>




</html>
	