<?php
require_once 'system/templates/default/layout.php';
$result = null;
if(isset($_POST['Send']))
{
	$result = $Calculator->Spalanie($_POST['length'],$_POST['average'],$_POST['price']);

}
startblock('title');
echo $Combustion;
endblock();


startblock('content');
echo'
	<center>
	<form method="POST">
	<br>
	'.$CostT.'
	<br>
	<input type="text" style="width:20%;" class="input" name="length" placeholder="'.$LengthR.'">
	<br>
	<input type="text" style="width:20%;" class="input" name="average" placeholder="'.$AverCom.'">
	<br>
	<input type="text" style="width:20%;" class="input" name="price" placeholder="'.$PriceL.'">
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