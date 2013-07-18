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
	function register($name, $email, $type, $password, $birthdate){
		if(!$name){
			echo "Please enter your name.";
		}
		if(!$email){
			echo "Please enter your name.";
		}

		$query = mysql_query("INSERT INTO users VALUES('','$name','$email','$type','$password','$birthdate')");
	}
}
?>