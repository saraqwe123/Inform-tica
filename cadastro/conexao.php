<?php

$host = 'localhost';
$usuario = 'root';
$senha = 'sara.sara';
$banco = 'controle_patrimonio';

//VARIAVEL PRA FAZER A CONEXAO COM O MYSQL
$conexao = new mysqli ($host, $usuario, $senha, $banco);

//verificando a conexao
if ($conexao->connect_errno) {
    // Se houver um erro de conexão, exibe uma mensagem de erro detalhada
    echo "Erro de conexão com o banco de dados: " . $conexao->connect_error;
} else {

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../pagina_principal/estilo2.css">
        <script src="../pagina_principal/javascript2.js" defer></script>
    </head>

    <body>
        <button class="botao1" id="botao">
            &#9776
        </button>
        <ul class="menu_lista" id="menu">
            <div class="menu_conteudo">
                <li><a href="../cadastro/cadastro.php">CADASTRO</a></li>
                <li><a href="../login/login.php">LOGIN</a></li>
                <li><a href="../modulo_01/index3.html">MÓDULO 01</a></li>
                <li><a href="../modulo_02/index4.html">MÓDULO 02</a></li>
            </div>
        </ul>
        <div class="meio">
            <table>
            <thead><h1>TABELA DE ITENS</h1></thead>
            <tr>
                <th>id item</th>
                <th>nome</th>
                <th>descrição</th>
                <th>valor estimado</th>
                <th>id categoria</th>
                <th>marca</th>
                <th>local item</th>
                <th></th>
            </table>

            </tr>
        </div>
    </body>
</html>

<?php
}
?>