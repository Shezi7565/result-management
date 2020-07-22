<?php
Class functions
{
	function con()
	{
		$conn = mysqli_connect("localhost","root","","webpro");	
	}
	function login($email,$password)
	{
		$conn = mysqli_connect("localhost","root","","webpro");
		$insert=mysqli_query($conn,"Select * from user where name='".$email."' AND pass='".$password."'");
		$num=mysqli_num_rows($insert);
		if($num > 0)
		{
			echo "<script> window.location.assign('insert_res.php'); </script>";	
		}
		else
		{
			echo "<script> alert('Invalid Username or Password'); </script>";	
		}
		
	}
}
?>