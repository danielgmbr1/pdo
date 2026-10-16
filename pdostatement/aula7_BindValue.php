<?php

include "../conexao.php";

try {
    $sql = 'INSERT INTO clientes (nome, sobrenome, idade) VALUES (:nome, :sobrenome, :idade)';
    $prepare = $pdo->prepare($sql);

    $prepare->bindValue(":nome", 'Pedro', PDO::PARAM_STR);
    $prepare->bindValue(":sobrenome", 'Furtado', PDO::PARAM_STR);
    $prepare->bindValue(":idade", 35, PDO::PARAM_INT);

    $count = $prepare->execute();
    echo "$count . linhas afetadas";

} catch (PDOException $err) {
    echo $err->getMessage();
}