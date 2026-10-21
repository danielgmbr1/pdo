<?php

include "../conexao.php";

/**
 * PDO:exec - Executa uma instrução SQL e retorna o número de linhas afetadas.
 */

try {
    $sql = "SELECT * FROM clientes";
    $exec = $pdo->query($sql);
    $count = $exec->rowCount();
    
    echo "Essa consulta retornou $count resultados.";
    
} catch (PDOException $err) {
    echo "Erro na execução com o banco de dados. Informe ao programador o seguinte erro: \n";
}