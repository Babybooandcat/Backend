<?php

    $vetor = array($_POST['num1'], $_POST['num2'], $_POST['num3'], $_POST['num4'], $_POST['num5'], $_POST['num6']);
    $nump = $_POST['nump'];
    $contador = 0;

    for($i = 0; $i < 6; $i++) {
        if($nump == $vetor[$i]) {
            echo "encontrado <br>";
            $contador++;
            break;
        }
    }
    if($contador == 0) {
        echo "nao encontrado <br>";
    }

    echo "<a href='formuq5.html'> Pesquisar novamente</a>";
?>