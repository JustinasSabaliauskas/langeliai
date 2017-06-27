<?php
    function get_area($turis)
    {
    	$gylis = 1.3;

    	$turis = 20 * 5 * $gylis;
    
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