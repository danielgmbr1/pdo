<?php

include "../conexao.php";

/**
 * PDO:errorCode - Retorna o código de erro da última operação.
 * PDO:errorInfo - Retorna informações sobre o último erro de operação.
**/

try {
    $pdo->exec("SELECT * FROM clientes");
} catch (PDOException $err) {
    echo "Erro na execução com o banco de dados. Informe ao programador o seguinte erro: \n";
    echo "Codigo: " . $pdo->errorInfo()[1] . "\n";
    echo "Mensagem: " . $pdo->errorInfo()[2] . "\n";
}
