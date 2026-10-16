<?php

$pdo = new PDO("pgsql:host=127.0.0.1;port=5432;dbname=dicas", "postgres", "cabu1960");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

