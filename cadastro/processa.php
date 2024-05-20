<?php
include_once('conexao.php');

// Verificando se houve um envio do formulário
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $premium = $_POST['premium'];

    // Usando prepared statements para evitar injeção de SQL
    $stmt = $conexao->prepare("INSERT INTO cadastro_usuarios (cpf, rg, email, nome_user, senha_user, chave) VALUES (?, ?, ?, ?, ?, ?)"); //evita a injeçao sql
    $stmt->bind_param("ssssss", $cpf, $rg, $email, $nome, $senha, $premium); //acessa os ?

    if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . $stmt->error;
    }

    $stmt->close();
}
?>