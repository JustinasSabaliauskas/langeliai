<?php
function atsitiko($gerimai){
$i = rand(0, count($gerymai) -1);
$a = [$i];
echo sprintf("Jusu gerymas yra %u",$a);
}

?>
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<ul>

<?php
$gerymai = ["vaduo","alus", "kava", "kakava", "sultys"];
for ($i=0; $i <count($gerymai) ; $i++) { 

	echo "<ul><li>".$gerymai[$i]. "</li></ul>";

}
//$somedrinks = array_slice($gerimai, 0, 3); // 0 -kuri paimame/ 3 - kiek paimti
//$apjungimas = array_merge($masyvas1, $masyvas2); //- apjungia masyvys
//$explode = explode("," $drinks)// - dalna elepemtus, siuoatveju iesko tarpu(space)
//$implode = implode("," $drinks) //-apjungia teskta
//sort($masyvas) //-surusiuoja masyva, jei ji sudaro skaiciai. neasocitiviems masyvasms
//asort($masyvas) // -asociativiems masyvams.
//shuffle($masyvas)// -istriukai atsitiktini elemta
?>

</ul>

</body>
</html>