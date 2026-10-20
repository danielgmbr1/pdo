
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
    $sql = "SELECT * FROM clientes";
    $prepare = $pdo->prepare($sql);
    $count = $prepare->execute();
    $results = $prepare->fetchAll(PDO::FETCH_OBJ);

    foreach ($results as $linha) {
        if ($linha->idade >= 50){
            echo "\nPASSOU DE MEIO CENTENARIO: \n{$linha->id} \t {$linha->nome} \t {$linha->sobrenome} \t {$linha->idade}";
        }

    else{
        echo "\nABAIXO DO MEIO CENTENARIO: \n{$linha->id} \t {$linha->nome} \t {$linha->sobrenome} \t {$linha->idade}";
    }
        
    }
    

} catch (PDOException $err) {
    echo $err->getMessage();
}

