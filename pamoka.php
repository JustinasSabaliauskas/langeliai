
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
for ($kinta=0; $kinta <10 ; $kinta++) { 
		$suma= 3 * $kinta;}

$tekstas = sprintf("Padaugitni %u, is %u", $suma, $kinta);
echo $tekstas;
?>

</body>
</html>
//indexuojams masyvas nurodom $pvz[0]
//atspauzdinti visa mastva
     //for ($i=0; $i < count($masyvas); $i++) { 
	//echo $masyvas [$i];

//reach ($masyvas1 as $kuriampriskitareiksme){
	//echo  $kuriampriskitareiksme;
	
//$skaiciai = [2,9,20,40,25];

#asociatyvus masyvai
$user =["name" = "Justinas", "Surname" => "Sabaliauskas"];
echo $user["name"];