<?php

include "../conexao.php";

class Cliente{

}

try {
    
    $sql = "SELECT * FROM clientes";
    $prepare = $pdo->prepare($sql);
    $count = $prepare->execute();

    $result = $prepare->fetchObject("Cliente");

    print_r($result);

} catch (PDOException $err) {
    echo $err->getMessage();
}