<?php
//requere "functions.php";
//include "functions.php";
 
 // external php source
?>
<?php
        print_cells(200); 
?>


<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/jstyle.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>

            <div class="col-md-4">
                <table class="table">


                    <?php 
                    function print_cells($count) {
                        for ($x=1 ; $x <=$count; $x++) {
                         echo '<td class="lenta">' . $x . '</td>';
                        } 

                    }//adding "\" -padeda apeiti ribojima
                    ?>


                </table>
                <div class="col-md-4"></div>

            </div>
        </div>
        
        
</body>

</html>