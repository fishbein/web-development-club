<?php
$email = $_POST['email'];
$pass = $_POST['pass'];

include('authentication.php');

$authentication = new Authentication;
$authentication->login($email,$pass);
?>