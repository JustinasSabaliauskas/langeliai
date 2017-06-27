<?php
	function lentele($sudetis)
{
	echo "<table><tr><th>Ingredietas</th><th>Kiekis</th></tr>";
			foreach ($sudetis as $sudetis => $value)
{
			echo "<tr> <td>" .$sudetis. "<td><td>" .$value. "</td></tr>";
}
			echo "</table>";
}

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<?php

//$sudetis = ["jautiena"=>"250", "pupeles"=>"500", "vanduo"=>"500", "pomidorai"=>"300","paprika"=>"100"];

//foreach ($sudetis as $sudetis => $value) {
	//echo "<ul><li>" .$sudetis."</li></ul>";
	//$pateikimas = sprintf("Ingredienyas: %u kiekis %u </br>", $sudetis, $value);
	//echo $pateikimas;
	//echo "Ingredietas : " .$sudetis. ", sudetis :" . $value. " gr. </br>";
	//echo "<tr><td>" .$sudetis. "<td><td>" .$value. "</td></tr>";
$sudetis
//}
//$tekstas = sprintf("Padaugitni %u, is %u", $suma, $kinta);
//echo $tekstas

//for ($i=0; $i <count($sudetis) ; $i++) { 
	//echo "<ul><li>" .$sudetis[$i]."</li></ul>";



?>
</body>
</html>