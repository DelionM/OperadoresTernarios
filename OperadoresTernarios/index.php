<?php
    echo "Operadores Ternarios es como si usara el if pero más corto <br>";
    echo $a = 10;
    echo "<br>";
    echo $b = 12;
    echo "<br>";
    echo "<br>";
    echo $c = 6;
    echo "<br>";
    echo $d = 36;
    echo "<br>";
######################################################################################################

    if($a > $b){
        echo "El valor de A es mayor a B <br>";
    }
    elseif($a < $b){
        echo "El valor de A es menor al de B <br>";
    }
    else
        echo "El valor de A es igual al de B <br>";
    
######################################################################################################
    #Se maneja como si fuera un if en exel 
                             /*SI*/    /*NO*/
    echo $valor = $a > $b ? "mayor <br>" : "menor <br>";

    #Operadores ternarios anidados
    echo "Operadores ternarios anidados <br>";
    $valorDos = $c > $d ? "mayor" : ($c < $d ? "menor": "igual");
        echo "el valor de c es $valorDos que el valor de d <br>";
?>