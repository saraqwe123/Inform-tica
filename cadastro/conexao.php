<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'controle_patrimonio';
$porta = '3307';

//VARIAVEL PRA FAZER A CONEXAO COM O MYSQL
$conexao = new mysqli($host, $usuario, $senha, $banco, $porta);

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
        <link rel="stylesheet" href="estilo2.css">
        <script src="../pagina_principal/javascript2.js" defer></script>
    </head>

    <body>
        <header>
            <div>
                <img class="top" src="./imagem/salvar.png" alt="">
                salvar
            </div>
            <div>
                <img class="top" src="./imagem/impressao.png" alt="">
                imprimir
            </div>
            <div>
                <img class="top" src="./imagem/cancelar.png" alt="">
                cancelar
            </div>
            <div>
                <img class="top" src="./imagem/lixeira.png" alt="">
                excluir
            </div>
        </header>
        <div class="container">
            <p id="dois">consulta</p>
            <p id="tres">cadastro</p>
            <div class="meio">
                Cadastro de Itens
            </div>
            <form action="">
                <label for="icategoria" id="label0">Selecione a categoria do item</label>
                <input type="text" id="icategoria">
                <label for="inome" id="label0">Nome do item</label>
                <input type="text" id="inome" name="nome">
                <input type="checkbox">
            </form>
            <div class="informacoes">
                <label for="ilocal" id="label1">Local do item</label>
                <input type="text" id="ilocal" name="local">
                <label for="idescricao" id="label2">Descrição</label>
                <input type="text" id="idescricao" name="descricao">
                <label for="imarca" id="label3">Marca</label>
                <input type="text" id="imarca" name="marca">
                <label for="idata" id="label4">Data de entrada</label>
                <input type="text" id="idata" name="data">
                <label for="ivalor" id="label5">Valor estimado</label>
                <input type="text" id="ivalor" name="valor">
                <label for="inergia" id="label6">Quantidade de energia</label>
                <input type="text" id="inergia" name="energia">
            </div>
            <div class="fotos">
                imagem
            </div>
        </div>

    </body>

    </html>

    <?php
}
?>
