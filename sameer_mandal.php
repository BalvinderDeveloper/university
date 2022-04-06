<?php
	$name = $_POST['kname'];
	$fname  = $_POST['kemail'];
	$mname  = $_POST['kpass'];
	$btn = $_POST['btn'];

	$server="127.0.0.1";
	$username="root";
	$password="";
	$connect_mysql= mysql_connect($server,$username,$password);

	$mysql_db=mysql_select_db("sameer");
	
	if($btn=="INSERT")
	{
		
		$qry =mysql_query("INSERT INTO sign(kname,kemail,kpass)VALUES('$name','$fname','$mname')");
	
		if ($qry>0)
		{
			
			echo "<h1>succussfully</h1>";
			
		}
		else
		{
			echo "Record Not Seved";
		}
	}
?>