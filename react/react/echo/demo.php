<?php
	header("Access-Control-Allow-Origin: *");

	$name = $_GET["name"];
	$age = $_GET["age"];
	$conn = mysql_connect("localhost","root","");
	if(!$conn){
		die('不能连接：'.mysql_error());
	}
	mysql_select_db("test",$conn);
	mysql_query("INSERT INTO test(name,age)VALUES('{$name}','{$age}')");
	echo $conn;
	mysql_close($conn);
?>