<?php


function get_feel($t){
if ($t <= 5) {
    return "Salta!";
} 
if ($t >= 6) {
    return "Silta!";
} 
else if ($t >= 29)
{
    return "Karsta!";
}
}

?>
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<table>
	
	<tr>
	<th> Temperatura</th> 
	<th>Pojutis</th>
	</tr>
		<?php
			for ($t=0; $t <=30 ; $t++) { 
				echo "<tr><td>" .$t. "</td> <td>" .get_feel($t)."</td></tr>";
			}
			?>
		
</table>

</body>
</html>

//namu darbam lentele su baseinu get_area() - turi baseini get volume.(3 paramentrai)
//kiek reikes masinu uzpildyti baseina -get_truck  count
// $turis = get_volume ($ilfis, $plotis, $gylis)
//$sunkvezimiai = gauti sunkvezimius ($turi, $cisterna)

//echo"jei ilgis yra" .$ilgis. "tai reikes" . 

        