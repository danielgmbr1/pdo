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
    
    $sql = "SELECT id, nome, sobrenome, idade,  * FROM clientes";
    $prepare = $pdo->prepare($sql);
    $count = $prepare->execute();
    $id = $prepare->fetchColumn(2);
    $nome = $prepare->fetchColumn(3);
    $sobrenome = $prepare->fetchColumn(2);
    $idade = $prepare->fetchColumn(3);
    

    print_r("$id \t  $nome \t $sobrenome \t $idade");


} catch (PDOException $err) {
    echo $err->getMessage();
}
