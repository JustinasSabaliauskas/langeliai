<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$sudetis = ["jautiena"=>"250", "pupeles"=>"500", "vanduo"=>"500", "pomidorai"=>"300","paprika"=>"100"];
foreach ($sudetis as $sudetis => $value) {
	//echo "<ul><li>" .$sudetis."</li></ul>";
	//$pateikimas = sprintf("Ingredienyas: %u kiekis %u </br>", $sudetis, $value);
	//echo $pateikimas;
	echo "Ingredietas =" .$sudetis. ", sudetis =" . $value. "</br>";

}
//$tekstas = sprintf("Padaugitni %u, is %u", $suma, $kinta);
//echo $tekstas

//for ($i=0; $i <count($sudetis) ; $i++) { 
	//echo "<ul><li>" .$sudetis[$i]."</li></ul>";



?>
</body>
</html>