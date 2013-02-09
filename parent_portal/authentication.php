<?php
class Authentication{
	function login($email,$password){
		$correctemail = "jon@doe.com";
		$correctpassword = "password";

		if($email==$correctemail&$password==$correctpassword){
			echo "Success!";
		}
		else{
			echo "Login failed.";
		}
	}
}
?>