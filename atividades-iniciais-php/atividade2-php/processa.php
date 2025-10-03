<?php

// Exercício sem estilização no php...

function sair(){

    echo "<br><a href='index.html'>Voltar</a>";
}

$numero = $_POST['numero'];

if($_SERVER['REQUEST_METHOD']==='POST'){

    if (empty($numero)){

    echo "Por favor, digite um número! <br>";

    sair();

    }else if(!empty($numero)){

    echo "Por favor, preencha o campo apenas com 'números'! <br>";

    sair();
    
    
    }else if ($numero % 2 == 0){

        echo "O número: " . htmlspecialchars($numero). ".<br> Resultado: par! <br>";
    
        sair();

    } else{

        echo "O número: " . htmlspecialchars($numero). ".<br> Resultado: ímpar! <br>";
    
        sair();

    }

}

?>

