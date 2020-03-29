<?php
//ubicacion
define('CSV', 'datos.csv');
//leer csv
$readCsv = array_map('str_getcsv',file(CSV));

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <?php
        foreach ($readCsv as $itemCsv) {
            echo '<tr>';
            foreach ($itemCsv as $elementoItemCSV) {
                echo '<td>';

                //mostrar la celda
                echo $elementoItemCSV;
                echo '</td>';

            }
            echo '</tr>';
        }
    
    ?>
    
    </table>


</body>
</html>