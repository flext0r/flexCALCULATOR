<?php
require_once 'system/templates/default/layout.php';
$result = null;
if(isset($_POST['Send']))
{
	$result = $Calculator->Silnia($_POST['N']);
}

startblock('title');
echo 'Silnia';
endblock();


startblock('content');
echo'
	<center>
	<form method="POST">
	<br>
	Silnia:
	<br>
	<input type="text" style="width:20%;" class="input" name="N" placeholder="N">
	<br>
	<input type="submit" style="width:10%;" class="button" name = "Send" value="Oblicz">
	</form>
	<br>
	Wyniki:
	</center>
	<div class="ResultBox">
	'.$result.'
	</div>';

endblock();

?>