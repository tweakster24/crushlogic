	
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
<div class="robocrustcss">
	  <h2 class='title'> Please Select Your Crush</h2>
    <?php
	
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('crushlist') or die(mysql_error());
	$qry="select * from info where username not like '$_SESSION[username]' and username not in (select uska_crush from crush_list where username like '$_SESSION[username]' )";
	$result=mysql_query($qry);
	
	
	if(!$result)
	{
		die("Error".mysql_error());
		}
		else
			{	
	echo "<form action='' method='post'><table>";
		while(	$row=mysql_fetch_array($result))
		{
		
	
			echo " <tr><td>$row[name]<input type=radio name=crush value='$row[username]'><td>";
		}
echo "<tr><td><input type=submit name='submitcrush' value=submit></table></form>";
			
			}	
			
if(isset($_POST["submitcrush"]))
{
	
	$qry="insert into crush_list (username,uska_crush) values ('$_SESSION[username]','$_POST[crush]')";
	$rs=mysql_query($qry);
	if(!$rs)
	{
		die("Error".mysql_error());
		}
	
	
	echo "<script>alert('Crush Added to Record succeffully');
	window.location.assign('showcrush.php')
	</script>";
	
	}
?>
</div>
</body>
</html>
	