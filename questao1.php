<?php

    $nome = $_POST['nomepiloto'];
    $distancia = $_POST['distancia'];
    $tempo = $_POST['tempo'];
    $vm = $distancia/$tempo;

    echo "a velocidade media foi de " . $nome . " foi de " . $vm. "<br>";

    echo "<a href='formuq1.html'> voltar para a pagina </a>";
?>