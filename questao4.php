<?php

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operador = $_POST["operador"];

    if($operador == "+") {
        $result = $num1 + $num2;
    } else if ($operador == "-"){
        $result = $num1 - $num2;
    } else if ($operador == "*") {
        $result = $num1 * $num2; 
    }else if ($operador == "/"){
        $result = $num1 / $num2;
    }
    echo "o resultado foi ". $result. "<br>";

    echo "<a href='formuq4.html'>Voltar para a pagina inicial</a>";

?>