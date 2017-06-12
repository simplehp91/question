<?php
	$sql_sever = "localhost";
	$sql_user = "root";
	$sql_pass = "";
	$sql_database = "thitoan";
	$con = mysql_connect($sql_sever,$sql_user,$sql_pass);
	if(!$con)
	{
		echo "Không thể kết nối với MySQL ".mysql_error();
		exit();
	}
	mysql_select_db($sql_database);
	mysql_query("set names utf8");
	// session start
?>
