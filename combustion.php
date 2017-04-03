<?php
require_once 'system/templates/default/layout.php';
$result = null;
if(isset($_POST['Send']))
{
	$result = $Calculator->Combustion($_POST['amount'],$_POST['KMT']);

}
startblock('title');
echo $Combustion;
endblock();


startblock('content');
echo'
	<center>
	<form method="POST">
	<br>
	'.$Combustion.'
	<br>
	<input type="text" style="width:20%;" class="input" name="amount" placeholder="'.$AmountOfFuel.'">
	<br>
	<input type="text" style="width:20%;" class="input" name="KMT" placeholder="'.$KMT.'">
	<br>
	<input type="submit" style="width:10%;" class="button" name = "Send" value="'.$Calculate.'">
	</form>
	<br>
	'.$Results.'
	</center>
	<div class="ResultBox">
	'.$result.'
	</div>
	';

endblock();

?>