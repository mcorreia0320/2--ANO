<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="register.php">Registo</a></li>
            <li><a href="users.php">Lista de Utilizadores</a></li>
        </ul>
    </nav>


    <?php
    // Verifica se a variável 'created' foi passada por GET e possui o valor 'true'
    if (isset($_GET['created']) && $_GET['created'] == 'true') {
        echo '<p>Utilizador criado com sucesso</p>';
    }
    ?>

</body>
</html>


