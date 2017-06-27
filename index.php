<?php
    function get_area($turis)
    {
<<<<<<< HEAD
    	$gylis = 1.3;

    	$turis = 20 * 5 * $gylis;
    
=======
    	
    $turis = 20 * 5 * $gylis;
    	
>>>>>>> df2c951c1e58a6955c06108fd57eb102ccf18b77
    	return $turis;
    }
    //function cisternos(){
    	//if ($turis <= 400 ) {
    		
    	//}
    	//}
    	//return $cisternos
    //}
    
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Baseinai ir autocisternos</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="conatiner">
            <div class="row">
                <div class="col-xs-6 col-md-4"></div>
                <div class="col-xs-6 col-md-4">
                    <table>
                        <tr>
                            <th>Baseino gylis </th>
                            <th> Baseino turis</th>
                            <th>Cisternos</th>
                        </tr>
                        <?php
                        for ($gylis=0; $gylis < 1 ; $gylis++) { 
                        
                            echo "<tr><td" .$gylis. "</td><td>" .get_area($turis) . "</td></tr>";}
                           ?>
                    </table>
                </div>
                <div class="col-xs-6 col-md-4"></div>
            </div>
        </div>
    </body>
</html>
//col span -sujungia 2 ir daugiau andeliu
//row span - jungia stulpelius
------------------------------
strlen - //skaiciuja simbolius
strpos- 
strlower -lowecase
stroupper- upercase
stro_replace- pakeicia teksta kitu
ucwords - visu zodziu visos pitmors raides didzioiso
str_dhuffle - sukeicia raides vietomis
rtrim- nirode simboli nutrina nuo galo "."
ltrim - nutrina nuo priekio (@tekstas, ".") //$reszultatas-" zodis"/\
sprintf - i sablobna iterpia reiksmes($teksto sablonas "Justia", "patenkinimas") - 
$tejsitSablonas 5s, jusu rezultatas %s";
<?=?>sintkse
<?=$pavyzdys;?> - taupant vietos <body>