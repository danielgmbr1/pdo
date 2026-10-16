<?php

include "../conexao.php";

/**
 * PDO:exec - Executa uma instrução SQL e retorna o número de linhas afetadas.
 */
try {
    $count = $pdo->exec("DELETE FROM cliente");
    echo "$count Linhas afetadas."; 
} catch (PDOException $err) {
    echo $err->getMessage();
}