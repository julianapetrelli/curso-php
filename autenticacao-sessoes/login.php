<?php

require __DIR__.'/session.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['user'] = [
        'name' => filter_input(INPUT_POST, 'name'),
    ];

    header('Location: index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>

    <form action="" method="POST">

        <label for="name">Nome
            <input type="text" name="name" placeholder="Digite seu nome..." required>
            <input type="submit" value="enviar">
        </label>
        
    </form>

</body>

</html>