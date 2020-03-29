<?php
	//ubicacion csv
    define('CSV', 'datos2.csv');

	//leer csv
	$readCsv = array_map('str_getcsv', file(CSV));
?>

<html>
<table border="2">

<?php
	//recorremos filas del csv

	echo "<tr>

    <th>Dato 1</th>

    <th>Dato 2</th>

	<th>Dato 3</th>
	<th>Dato 4</th>

    <th>Dato 5</th>

	<th>Dato 6</th>
	<th>Dato 7</th>
	<th>Dato 8</th>
	<th>Dato 9</th>
	<th>Dato 10</th>
	<th>Dato 11</th>
	<th>Dato 12</th>
  	</tr>";

	foreach ($readCsv as $itemCsv) {
        echo '<tr>';
		
		//recorremos celdas del csv
		foreach ($itemCsv as $elementoItemCSV) {
			echo '<td>';
			
			

			//mostramos la celda
			echo $elementoItemCSV;
			
			echo '</td>';
		}
		
		echo '</tr>';

	}
?>

</table>
</html>