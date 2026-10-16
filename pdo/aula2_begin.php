<?php

include "../conexao.php";

/**
 * PDO:begginTransaction - Inicia uma transação.
 * PDO::commit - Autoriza uma transação.
 * PDO::rollBack - Desfaz uma transação.
 */
try {
    $pdo->beginTransaction();
    $pdo->exec("INSERT INTO cliente (nome_cliente) VALUES ('Carlos Silva')");
    $pdo->rollBack();

    $pdo->beginTransaction();
    $pdo->exec("INSERT INTO cliente (nome_cliente) VALUES ('Maria Silva')");
    $pdo->commit();

    
} catch (PDOException $err) {
    echo $err->getMessage();
}