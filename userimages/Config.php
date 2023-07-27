<?php
	if(!mysql_connect("localhost","root"))
		die("Server is not responding,Please try later");
	
	if(!mysql_select_db("info"))
		die("Server is not responding,Please try later");
?>	
