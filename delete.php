<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$HostName="localhost";
$db_name="ttest";
$LoginName="root";
$LoginPassword="";

   
?>
 <?php
	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con){die('Could not connect: ' . mysql_error());}
  	mysql_select_db($db_name , $con);
		mysql_query("set names 'utf8';");
	$sql = "SELECT * FROM persons" ;
	
	$result = mysql_query($sql,$con) ;
	?>

  <?php
	while($row = mysql_fetch_array($result)){
	?>
    <form name="myform" method="get" action="update2.php">
<input type="hidden" name="person_id" value="<?php echo "$row[person_id]"?>" />
  الاسم <input type="text" name="person_name" value="<?php echo "$row[person_name]"?>" />



 السن<input type="text" name="person_age" value=" <?php echo "$row[person_age]"?>">
  <input type="submit" value="تعديل" /><hr />
</form>
  <?php
	;}
	 mysql_close($con);
	?>
    
    
    <?php
$HostName="localhost";
$db_name="ttest";
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
	
	$person_id= $_GET[person_id] ;
	if ( isset($_GET['person_id'])) {
	$sql = "DELETE FROM persons WHERE person_id ='$person_id'" ;}
	
	mysql_query($sql,$con) ;
	
  mysql_close($con);
  
?>
</body>
</html>