<?php

    echo "<hr>";
    echo "<h1>Primera letra en mayúscula</h1>";

    function primeramayuscula($dato){
        //muestra si es mayuscula o no
        echo ucfirst($dato);
    }

    echo primeramayuscula("funciona");

    echo "<hr>";
    echo "<h1>Reeemplazar Datos</h1>";

    function reemplazar($valorbuscado,$valorreemplazar){
        //busca una a y devuelve una e
        $valorbuscado="a";
        $valorreemplazar="e";
        echo str_replace ($valorbuscado, $valorreemplazar);
    }


    echo "<hr>";
    echo "<h1>Mostrar Mes</h1>";

    function mostrarmes($fecha){
        //envia la fecha y retorna en castellano
        $d = new DateTime ("a");
        echo $d->format("F");
    }
    echo mostrarmes("fecha");

    echo "<hr>";
    echo "<h1>Versión PHP</h1>";

    function info(){
        //muestra la version de php y la version del servidor
        echo "versión de php: ". phpversion();
    }

    echo info();

    echo "<hr>";
    echo "<h1>Números primos</h1>";

    function numeroPrimo($numero){
             //retorna si el numero es primo o no
             if ( $numero == 1 ) {
                echo "false";
            }
            
            if ( $numero == 2 ) {
                echo "true";
            }
            
            $x = sqrt($numero);
            $x = floor($x);
            for ( $i = 2 ; $i <= $x ; ++$i ) {
                if ( $numero % $i == 0 ) {
                    break;
                }
    }
}

   $numero=4;
   numeroPrimo($numero);

    echo "<hr>";
    echo "<h1>Año bisiesto</h1>";

    function bisiesto($año){
        //muestra si el año es bisiesto o no
    if ($año % 4 == 0)
        print("Es bisiesto");
     else
        print("NO es bisiesto");
    }
    $año = 2022;
   bisiesto($año);
