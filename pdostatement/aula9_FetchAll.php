<?php

include "../conexao.php";

/**
 * PDOStatement::fetch - Retorna o próximo resultado de uma consulta.
 *
 * Modos:
 * PDO::FETCH_ASSOC       - Nomes das colunas
 * PDO::FETCH_BOTH (padrão) - Nomes e índices das colunas
 * PDO::FETCH_NUM          - Índices das colunas 
 * PDO::FETCH_OBJ          - Objeto
 */

try {
    $sql = "SELECT * FROM clientes WHERE id > 1";
    $prepare = $pdo->prepare($sql);
    $count = $prepare->execute();
    $results = $prepare->fetchAll(PDO::FETCH_OBJ);

    print_r($results);

} catch (PDOException $err) {
    echo $err->getMessage();
}

