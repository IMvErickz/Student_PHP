<?php

function conexao(){
    $user = "root";
    $senha = "";
    $dsn = "mysql:host=localhost;dbname=escola";
    $conn = new PDO($dsn, $user, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);

    return $conn;
}