<?php

/*
flexCALCULATOR

Coded by flext0r © 2017

*/
require_once './system/includes/main.php';
require_once './system/classes/ti.class.php';

if(isset($_POST['ChangeLang']))
{
	var_dump($Calculator->ChangeLanguage());
}


?>
<html>
<head>

<link rel="icon" href="system/images/favicon.png" type="image/png"/>
	<title><?php startblock('title') ?><?php endblock() ?></title>
	<link rel="stylesheet" type="text/css" href="system/css/style.css" />

</head>

<body>
<div class="top">
	<div class="wrapper">
		<div class="left">
			<a href="index.php" class="button">Home</a>
			<a href="delta.php" class="button">Delta</a>
			<a href="silnia.php" class="button">Silnia</a>
			<a href="spalanie.php" class="button">Spalanie</a>
			
		</div>
		<div class="right">
			<form method="POST">
			<input type="submit" class="button" name = "ChangeLang" value="Język(<?php echo $_COOKIE[$cookie_language]; ?>)">
			</form>
			</a>
		</div>
	</div>
</div>

<div class="content">

<?php 
	startblock('content');
	endblock();
?>
</div>
<div class="footer">
	Coded by flext0r © 2017
</div>
</div>

</body>
</html>