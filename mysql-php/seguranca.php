<?php

$email = $_GET['email'] ?? null;

$conexao = new mysqli('localhost', 'root', '30112002', 'php-curso');

$result = $conexao->query('INSERT INTO users (email) VALUES ("' . $email . '")');

var_dump($result);

