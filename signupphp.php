<?php
$name = $_POST['kname'];
 $email = $_POST['kemail'];
  $pass = $_POST['kpass'];
$btn = $_POST['btnsubmit'];
$server="127.0.0.1";
$username="root";
$password="";
$conn=mysql_connect($server,$username,$password);
$mysql_db=mysql_select_db("u");

if($btn=="INSERT")
{
	$qry=mysql_query("INSERT INTO signup(kname,kemail,kpass)VALUES('$name','$email','$pass')");

	if ($qry>0)
	{
		echo "Record Saved";
		echo "<table border='0'>";
    	echo "<tr><td> name </td> <td>".$name."</td></tr>";
    	echo "<tr><td> gmail id </td> <td>".$email."</td></tr>";
        echo "<tr><td> password </td> <td>".$pass."</td></tr>";
	}
	else
	{
		echo "Record Not Seved";
	}
}
?>