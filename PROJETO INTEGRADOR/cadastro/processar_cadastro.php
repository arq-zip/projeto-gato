<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Aqui você pode fazer o que quiser com os dados, como salvar em um banco de dados.

    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao processar o cadastro.";
}

?>