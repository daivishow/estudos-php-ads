<?php

// Exercício sem estilização no php...

function sair(){

    echo "<br><a href='index.html'>Voltar</a>";
}

$nome = $_POST['nome'];

if($_SERVER['REQUEST_METHOD']==='POST'){

    if (empty($nome)){

    echo "Por favor, digite seu nome! <br>";

    sair();

    }else if (!empty($nome)){

        echo "Bem vindo(a), " . htmlspecialchars($nome). "<br>";
    
        sair();
    }

}

?>

