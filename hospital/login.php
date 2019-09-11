<?php
	$Email=$_POST['email'];
	$pwd=$_POST['password'];
	$conn=mysqli_connect("localhost","root","","hospital");
	$result=mysqli_query($conn,"SELECT * FROM login WHERE email='$Email' && pwrd='$pwd'");
	$count=mysqli_num_rows($result);
	if($count==1)
	{
		
		header("location:welcome.php");
	}
	else
	{
		
		header("location:index.php");

	}


 /*  include('dbconnect.php');
   session_start();
   
   $user_check = $_SESSION['login'];
   
   $ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }*/
?>