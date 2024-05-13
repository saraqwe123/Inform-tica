<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo1.css">
    <script src="javascript1.js" defer></script>
</head>

<body>
    <button class="botao1" id="botao">
        &#9776
    </button>
    <ul class="menu_lista" id="menu">
        <div class="menu_conteudo">
            <li><a href="../pagina_principal/index2.html">CONTROLE DE PATRIMÔNIO</a></li>
            <li><a href="../modulo_01/index3.html">MÓDULO 01</a></li>
            <li><a href="../modulo_02/index4.html">MÓDULO 02</a></li>

        </div>
    </ul>
    <div class="formulario">
        <form action="">
            <label for="icpf">CPF</label>
            <br>
            <input type="text" name="" id="icpf" required size="35" style="background-color: #F1F3F6">
            <br>
            <label for="irg">RG</label>
            <br>
            <input type="text" name="" id="irg" required size="35" style="background-color: #F1F3F6">
            <br>
            <label for="iemail">Email</label>
            <br>
            <input type="email" name="" id="iemail" required size="35" style="background-color: #F1F3F6">
            <br>
            <label for="inome">Nome User</label>
            <br>
            <input type="text" name="" id="inome" required size="35" style="background-color: #F1F3F6">
            <br>
            <label for="isenha">Senha User</label>
            <br>
            <input type="password" name="" id="isenha" required minlength="5" placeholder="5 digitos" size="35"
                style="background-color: #F1F3F6">
            <br>
            <label for="">Chave?</label>
            <br>
            <input type="text" name="" id="ipremium" placeholder="Para usuários supremos" required size="35" style="background-color: #F1F3F6">
            <br>
            <input class="btn" type="submit" onclick="cadastro()">
        </form>
    </div>

    <?php

//verificando se houve um click no botao, caso houver, ele irá conectar o nossa pag conexao.php

if(isset($_POST['submit'])) {
    include_once('conexao.php');

    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $premium = $_POST['premium'];

    $usuarios = mysqli_query($conexao, "INSERT INTO cadastro_usuarios(cpf, rg, email, nome_usuario, senha_usuario, chave) VALUES('$cpf', '$rg', '$nome', '$senha', '$premium')");



}


?>
</body>

</html>