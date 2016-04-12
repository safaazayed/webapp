<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post">
Name<input name="u_name" type="text" /><br/>
Password<input name="u_password" type="password" /><br/>
<input name="submit" type="submit" value="Insert" />
</form>
 

<?php 
$HostName="localhost";
$db_name="webapp";
$LoginName="root";
$LoginPassword="";


$con = mysql_connect($HostName,$LoginName,$LoginPassword);
mysql_query("set names 'utf8'");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db($db_name , $con);
if ( isset($_POST['u_name']) && isset($_POST['u_password']) ) {
$sql = "INSERT INTO users (user_name,user_password) VALUES ('$_POST[u_name]' ,'$_POST[u_password]' )" ;
} else {
$sql = '';
}

mysql_query($sql,$con) ;

mysql_close($con);

?>
</body>
</html>