<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $conn = require('connection.php');

    $email = $_POST['email'] ?? null;

    $stmt = $conn->prepare('INSERT INTO users (email) VALUE (?)');
    $stmt->bind_param('s', $email);
    $stmt->execute();

    header('location: /index');
    die();
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar</title>
</head>
<body>
    <h1>Adicionar novo cadastro:</h1>

    <form action="" method="post">
        <input type="text" name="email">
        <input type="submit" value="enviar">
    </form>

    <p>
        <a href="index.php">Voltar</a>
    </p>
</body>
</html>