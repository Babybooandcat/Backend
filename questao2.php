<?php

    $num = $_POST['num'];
    $numaleatorio = rand(1, 10);

    if($num == $numaleatorio) {
       echo "parabens voce acertou!!!";
    }  
    else {
        echo "que pena voce errou, jogue de novo" . "<br>";
        
    }
    echo "<a href='formuq2.html'> voltar para a pagina inicial </a>";
?>