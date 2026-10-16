<?php

include "../conexao.php";

try {
    $sql = 'INSERT INTO clientes (nome, sobrenome, idade) VALUES (:nome, :sobrenome, :idade)';
    $prepare = $pdo->prepare($sql);

    $count = $prepare->execute();
    echo "$count . linhas afetadas";

} catch (PDOException $err) {
    echo $err->getMessage();
}