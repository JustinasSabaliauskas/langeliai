<?php

function get_area($turis)
{
	$turis = 20 * 5 * $gylis;
	
	return $turis;
}
function cisternos(){
	if ($turis <= 400 ) {
		
	}
	}
	return $cisternos
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Baseinai ir autocisternos</title>

</head>
<body>
<table>
<tr>
	<th>Baseino gylis </th> <th> Baseino turis</th> <th>Cisternos</th>
	</tr>
<?php

for ($gylis= 0; $gylis <= 100; $gylis++) { 
		
echo "<tr><td" .$gylis. "</td><td>" . get_area($turis). "</td></tr>";}


?>


</table>

</body>
</html>