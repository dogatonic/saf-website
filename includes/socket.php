        <div class="socket text-light text-center py-3">
			<p class="">&copy; <?=date("Y") ?> Suburban Alcoholic Foundation.</p>
<?php

if($bDebug){
	echo "<pre class='text-left' style='color: #f00;'>";

	echo $sIP . '<br>';
	echo "<<<<< " . $sApex . " >>>>>>><br><br>";
	print_r($_SERVER);
	print_r($arrPex);

	echo "</pre>";
}
?>
		</div>
	