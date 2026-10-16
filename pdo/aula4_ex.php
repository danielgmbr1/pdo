<?php

include "../conexao.php";

/**
 * PDO:query - prepara e executa uma instrução SQL, retornando um objeto PDOStatement.
 */
try {
    $results = $pdo->query("SELECT * FROM clientes");

    foreach($results as $linha){
        print_r($linha);
    }
} catch (PDOException $err) {
    echo $err->getMessage();
}
  
