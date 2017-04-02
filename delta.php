<?php
require_once 'system/templates/default/layout.php';
$result = null;
if(isset($_POST['Send']))
{
	$result = $Calculator->Delta($_POST['A'],$_POST['B'],$_POST['C']);
}


startblock('title');
echo $Delta;
endblock();


startblock('content');
echo'
	<center>
	<form method="POST">
	<br>
	Delta:
	<br>
	<input type="text" style="width:20%;" class="input" name="A" placeholder="A">
	<br>
	<input type="text" style="width:20%;" class="input" name="B" placeholder="B">
	<br>
	<input type="text" style="width:20%;" class="input" name="C" placeholder="C">
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