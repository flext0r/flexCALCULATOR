<?php

/*
main.php

flexCALCULATOR

Coded by flext0r © 2017

*/
require_once 'config.php';
require_once './system/includes/calculator.php';
require_once './system/includes/ti.php';

if(!isset($_COOKIE[$cookie_language]))
{
	setcookie($cookie_language,$cookie_default_language, 2147483647);
}else{
	require './system/languages/'.$_COOKIE[$cookie_language].'.php';
}



?>