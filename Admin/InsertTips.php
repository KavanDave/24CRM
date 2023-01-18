<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$Tip=$_POST['txtTips'];
	
	// Establish Connection with mysqli
	$con = mysqli_connect ("localhost","root","","cms");
	// Select Database
	mysqli_select_db("cms", $con);
	// Specify the query to Insert Record
	$sql = "insert into Tips_Tbl(Tips_Detail) values('".$Tip."')";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("Safety Tips Inserted Succesfully");window.location=\'Tips.php\';</script>';

?>
</body>
</html>
