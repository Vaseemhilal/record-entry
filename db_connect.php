<?php
	$db=mysql_connect("localhost","root","") or die(mysql_error());
	$db_sel=mysql_select_db("php_marathon") or die(mysql_error());	
/*	echo "Message: Database connected";*/
?>