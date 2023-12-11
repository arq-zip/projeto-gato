<?php
$servername = "127.0.0.1";  // Endereço do servidor MySQL
$username = "root";   // Nome de usuário do MySQL Workbench
$password = "";     // Senha do MySQL Workbench
$dbname = "site_animais";  // Nome do banco de dados que você está usando

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
} else {
    echo "Conexão bem-sucedida!";
}

// Você pode realizar consultas ou operações no banco de dados aqui

// Fechar a conexão quando terminar
$conn->close();
?>