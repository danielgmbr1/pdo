<?php

include "../conexao.php";

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$idade = $_POST['idade'];

var_dump($nome, $sobrenome, $idade);

/*try {
    $count = $pdo->exec("SELECT * FROM cliente");
    echo "$count Linhas afetadas."; 
    
} catch (PDOException $err) {
    echo "Erro na execução com o banco de dados. Informe ao programador o seguinte erro: \n";
} */