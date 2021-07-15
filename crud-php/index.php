<?php

$conn = require 'connection.php';

$result = $conn->query('SELECT * FROM users');
$users = $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <table>
        <thead>
            <th>ID</th>
            <th>E-mail</th>
            <th></th>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td>
                    <a href="ver.php?id=<?php echo $user['id']; ?>">Ver</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <p>
        <a href="./adicionar.php"> Adicionar</a> 
    </p>

</body>
</html>