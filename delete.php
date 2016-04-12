<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$HostName="localhost";
$db_name="webapp";
$LoginName="root";
$LoginPassword="";

   
?>
 <?php
	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con){die('Could not connect: ' . mysql_error());}
  	mysql_select_db($db_name , $con);
		mysql_query("set names 'utf8';");
	$sql = "SELECT * FROM users" ;
	
	$result = mysql_query($sql,$con) ;
	?>

  <?php
	while($row = mysql_fetch_array($result)){
	?>
<form name="myform" method="get">
<input type="hidden" name="u_id" value="<?php echo "$row[user_id]"?>" />
 Name: <input type="text" name="u_name" value="<?php echo "$row[user_name]"?>" />
Password<input type="text" name="u_password" value=" <?php echo "$row[user_password]"?>">
  <input type="submit" value="حذف" /><hr />
</form>
  <?php
	;}
	 mysql_close($con);
	?>

<?php
$HostName="localhost";
$db_name="webapp";
$LoginName="root";
$LoginPassword="";   
?>
<?php

	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con)
  	{
  	die('Could not connect: ' . mysql_error());
  	}
  
  	mysql_select_db($db_name , $con);
	
	$uu_id= $_GET['u_id'] ;
	if ( isset($_GET['u_id'])) {
	$sql = "DELETE FROM users WHERE user_id ='$uu_id'" ;}
	
	mysql_query($sql,$con) ;
	
  mysql_close($con);
  
?>

</body>
</html>