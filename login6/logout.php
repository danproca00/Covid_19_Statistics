<?php

session_start();

if(isset($_SESSION['IdUser']))
{
	unset($_SESSION['IdUser']);

}

header("Location: login.php");
die;