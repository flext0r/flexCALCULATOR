<?php

/*
main.php

flexCALCULATOR

Coded by flext0r © 2017

*/

require_once 'config.php';
require_once 'db.php';
require_once './system/classes/calculator.class.php';
require './system/languages/'.$_COOKIE[$cookie_language].'.php';
$Calculator = new Calculator();

if(!isset($_COOKIE[$cookie_language]))
{
	setcookie($cookie_language,$cookie_default_language, 2147483647);
}


?>