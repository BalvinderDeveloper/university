<?php  
ob_start();    
include('conection.php');  
$user = $_POST['email'];  
$password = $_POST['password'];
  
//to prevent from mysqli injection  
$user = stripcslashes($user);  
$pass = stripcslashes($password);  

$user = mysqli_real_escape_string($con, $user);  
$pass = mysqli_real_escape_string($con, $password);  

$sql = "select *from signup where email ='$user' and pass ='$pass'";  
$result = mysqli_query($con, $sql);  

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);  

$count = mysqli_num_rows($result);  

if($count == 1){  
    header("location:home.html");
}
else{
echo"<h1> Login failed. Invalid username or password.</h1>";  
}
ob_end_flush();
?> 