<?php
require_once 'system/templates/default/layout.php';
$result = null;
if(isset($_POST['Send']))
{
	$result = StrongPrime($_POST['N']);
}

startblock('title');
echo $StrongPrime;
endblock();


startblock('content');
echo'
	<center>
	<form method="POST">
	<br>
	'.$StrongPrime.'
	<br>
	<input type="text" style="width:20%;" class="input" name="N" placeholder="N">
	<br>
	<input type="submit" style="width:10%;" class="button" name = "Send" value="'.$Calculate.'">
	</form>
	<br>
	'.$Results.'
	</center>
	<div class="ResultBox">
	'.$result.'
	</div>';

endblock();

?>