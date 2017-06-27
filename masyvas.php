<?php
//$skaiciai = [20,90,20,40,25];
//for ($i=0; $i <count($skaiciai) ; $i++) { 
	//$skaiciai[$i] = $skaiciai[$i] * 2;
//}

//function spausdinti($masyvas) {
	//foreach ($masyvas as $elementas) {
		//echo "reiksme". $elementas . "<br/>";}
//}

?>

<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<pre>

<?php
$users=[];

$user1 =["name" => "Justinas", 
"surname" => "Sabaliauskas", 
"age" => 25, 
"phone"=> 111];

$user2 =["name" => "Jonas", 
"surname" => "Sabalis", 
"age" => 25, 
"phone"=> 8545]; 


//echo $user1["name"];

array_push($users, $user1, $user2);
foreach ($users as $user) {
	echo $user ["name"] . " " .$user["surname"] . "<br/>";
}

//print_r($skaicia);
//echo "<br/><br/>";
//var_dump($skaicia);
//echo "<br/><br/>";
//var_export($skaicia);
//echo $skaicia[0] = 11; //gali buti ir skaiciaus
//for ($i=0; $i < count($skaiciai) ; $i++) { 
//echo "reiksme". $skaiciai[$i] . "<br/>";
//}



//spausdinti($skaiciai);

?>
</pre>
</body>
</html>