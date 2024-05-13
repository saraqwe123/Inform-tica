<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'controle_patrimonio';

//VARIAVEL PRA FAZER A CONEXAO COM O MYSQL
$conexao = new mysqli ($host, $usuario, $senha, $banco);

//verificando a conexao
if($conexao -> connect_errno) {
    echo "Erro de conexão com o banco de dados";
} 

else {
    echo "Conexão efetuada com sucesso";
}

?>