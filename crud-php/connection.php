<?php 

$conexao = new mysqli('localhost', 'root', '30112002', 'crud');

if ($conexao->connect_errno) {
    die('Falha na conexão: (' . $conexao->connect_errno . ')' . $conexao->connect_error);
}

return $conexao;