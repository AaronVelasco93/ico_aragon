<?php
    $archivo = fopen( "datos.csv", "rb" );
    // Leer la primera línea:
     $aDatos = fgetcsv( $archivo, 100, ";");
    print_r( $aDatos );
    echo "<br />";
    // Tras la lectura anterior, el puntero ha quedado en la segunda línea:
     $aDatos = fgetcsv( $archivo, 100, ";" );
    print_r( $aDatos );
    echo "<br />-------------------------------------<p />";
    // Volvemos a situar el puntero al principio del archivo:
    fseek($archivo, 0);
    // Recorremos el archivo completo:
     while( feof($archivo) == false )
     {
         $aDatos = fgetcsv( $archivo, 100, ";");
        echo "Nombre: ".$aDatos[0]."<br />";
      
       
        echo "--------------------------<br />";
    }
    fclose( $archivo );
?>