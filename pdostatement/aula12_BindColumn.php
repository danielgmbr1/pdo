<?php

include "../conexao.php";

try {
    
    $sql = "SELECT * FROM clientes";
    $prepare = $pdo->prepare($sql);
    /*$prepare->bindColumn(1, $id);
    $prepare->bindColumn(2, $nome);
    $prepare->bindColumn('sobrenome', $varSobrenome);
    $prepare->bindColumn('idade', $varIdade);
    $result = $prepare->execute();

    while ($prepare->fetch(PDO::FETCH_BOUND)) {
        echo "ID: $id - Nome: $nome $varSobrenome - Idade: $varIdade anos\n";
    }*/
    $prepare->execute();
    $clientes = $prepare->fetchAll(PDO::FETCH_ASSOC);
    print_r($clientes);

} catch (PDOException $err) {
    echo $err->getMessage();
}