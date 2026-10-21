<?php

include "../conexao.php";

$dados = [
    ['nome' => 'Marcos', 'sobrenome' => 'Verde', 'idade' => 34],
    ['nome' => 'Pedro','sobrenome' => 'Fifa', 'idade' => 52]
];

try {
    $prepare = $pdo->prepare("INSERT INTO clientes (nome, sobrenome, idade) VALUES (:nome, :sobrenome, :idade)");

    $count = 0;
    foreach($dados as $valor){
        //$prepare->execute($valor);
        $count++;
    } 

    echo "Insert executado com o sucesso. Linhas afetadas $count";
} catch (PDOException $err) {
    echo $err->getMessage();
}