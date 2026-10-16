<?php

include "../conexao.php";

/**
 * PDO:exec - Executa uma instrução SQL e retorna o número de linhas afetadas.
 */

try {
    $count = $pdo->exec("SELECT * FROM cliente");
    echo "$count Linhas afetadas."; 
    
} catch (PDOException $err) {
    echo "Erro na execução com o banco de dados. Informe ao programador o seguinte erro: \n";
}