        <div class="socket text-light text-center py-3">
			<p class="">&copy; 2023 Suburban Alcoholic Foundation</p>
<?php
if($bDebug && 1){
	echo "<pre class='text-left' style='color: #f00;'>";

	echo $sIP . '<br>';
	echo $DB_DATABASE . "<br>";
	echo "<<<<< " . $sApex . " >>>>>>><br><br>";
	print_r($_SERVER);
	print_r($arrPex);

	echo "</pre>";
}
?>
		</div>
	