<?php
    $nome = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $resultado = ($nota1 + $nota2)/2;

    if($resultado >= 7) {
        echo $nome . " eba parabens voce foi aprovado, media: " . $resultado . "<br>";
    } else {
        echo $nome . " essa nao voce foi reprovado, media: " . $resultado . "<br>";
    }
    echo "<a href='formuq3.html'> voltar para a pagina inicial </a>";
?>