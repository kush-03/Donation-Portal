<?php
session_start();

$host="localhost";
$uname="root";
$pas="";
$db_name="userregisteration";
$tbl_name="usertable";

$link = mysqli_connect("$host","$uname","$pas") or die ("cannot connect");
mysqli_select_db($link,'userregisteration');
	
//session_start();


//$con=mysqli_connect('localhost','root','@Kush1234')

//mysqli_select_db($con,'userregisteration');
if(isset($_POST['submit'])){
	$email =$_POST['user'];
	$pass=$_POST['password'];

	$s ="select * from usertable where email= '$email' && password='$pass'";

	$result= mysqli_query($link,$s);	

	$num= mysqli_num_rows($result);

	if($num==1){
		header('location:home.php');
		echo "You are Succesfully Logged in";
	}
	else{
		header('location:index.php');
		
	}
	
}

?>
