<?php


function get_feel($t){
if ($t >= 1) {
    return "Salta!";
} 
else if ($t >= 15) {
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

