<?php
require_once 'system/templates/default/layout.php';
$result = null;
if(isset($_POST['Send']))
{
	$result = $Calculator->Spalanie($_POST['length'],$_POST['average'],$_POST['price']);

}
startblock('title');
echo 'Spalanie';
endblock();


startblock('content');
echo'
	<center>
	<form method="POST">
	<br>
	Koszty przejechanej trasy:
	<br>
	<input type="text" style="width:20%;" class="input" name="length" placeholder="Długość planowanej trasy">
	<br>
	<input type="text" style="width:20%;" class="input" name="average" placeholder="Średnie spalanie na 100km">
	<br>
	<input type="text" style="width:20%;" class="input" name="price" placeholder="Cena za 1L paliwa">
	<br>
	<input type="submit" style="width:10%;" class="button" name = "Send" value="Oblicz">
	</form>
	<br>
	Wyniki:
	</center>
	<div class="ResultBox">
	'.$result.'
	</div>
	';

endblock();

?>