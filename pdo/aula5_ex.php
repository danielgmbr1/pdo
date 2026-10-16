<?php

include "../conexao.php";

/**
 * PDO:prepare - Prepara uma instrução SQL para execução e retorna um objeto PDOStatement.
 * PDO:statement::execute - Executa uma instrução preparada.
 */
try {
    $prepare = $pdo->prepare("INSERT INTO cliente (nome_cliente) VALUES (:nome)");
    $count = $prepare->execute([
        'nome' => 'Carlos Silva'
    ]);
    echo "$count Linhas afetadas.";
} catch (PDOException $err) {
    echo $err->getMessage();
}
