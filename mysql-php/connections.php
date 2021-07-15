<?php

$conexao = new mysqli('localhost', 'root', '30112002', 'php-curso');

if ($conexao->connect_errno) {
    die('Falha na conexão: (' . $conexao->connect_errno . ')' . $conexao->connect_errno);
}

$resultado = $conexao->query('SELECT * FROM users');

print_r($resultado);