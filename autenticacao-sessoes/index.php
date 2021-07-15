<?php

require __DIR__.'/session.php';

$user = $_SESSION['user'] ?? null;

if (!$user) {
    header('Location: login.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Olá <?php echo $user['name']; ?> </h1>
    
    <form action="logout.php">
        <button type="submit">Sair</button>
    </form>
    
</body>
</html>

