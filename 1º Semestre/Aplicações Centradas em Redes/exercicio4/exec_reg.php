<?php
// Verifique se os parâmetros GET foram passados ​​e se têm valores
if (
    isset($_GET['username']) &&
    isset($_GET['nome']) &&
    isset($_GET['morada']) &&
    isset($_GET['email'])
) {
    // Recupere os dados do formulário usando $_GET
    $username = $_GET['username'];
    $nome = $_GET['nome'];
    $morada = $_GET['morada'];
    $email = $_GET['email'];

    // Conecte-se à base de dados (substitua com suas próprias configurações)
    $servername = "127.0.0.1:3306";
    $username_db = "root";
    $password_db = "";
    $dbname = "acr05";

    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    // Verifique a conexão
    if ($conn->connect_error) {
        die("Erro na conexão com a base de dados: " . $conn->connect_error);
    }

    // Prepare e execute a stored procedure "create_new_user"
    $stmt = $conn->prepare("CALL create_new_user(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $nome, $morada, $email);

    if ($stmt->execute()) {
        // A stored procedure foi executada com sucesso
        echo "Utilizador criado com sucesso.";

        // Redirecione para a página index.php com 'created' definido como true
        header("Location: index.php?created=true");
        exit();
    } else {
        echo "Erro ao criar o utilizador na base de dados: " . $stmt->error;
    }

    // Feche a conexão com a base de dados
    $stmt->close();
    $conn->close();
} else {
    echo "Parâmetros GET ausentes. Certifique-se de que todos os campos do formulário foram preenchidos.";
}
?>
