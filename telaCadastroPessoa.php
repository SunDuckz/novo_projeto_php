<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <?php
        require 'menu.html';
    ?>
    <h1>Cadastre-se</h1>
    <br>
    <form action="controller.php" method="post">
        <label for="nome">Usuario:</label>
        <br>
        <input type="text" name="nome" id="nome"required>
        <br>
        <label for="senha">Senha:</label>
        <br>
        <input type="password" name="senha" id="senha"required>
        <br>
        <label for="idade">Idade:</label>
        <br>
        <input type="number" name="idade" id="idade"required>
        <br>
        <label for="sexo">Gênero:</label>
        <br>
        <select name="sexo" id="sexo">
            <option value="">Selecione...</option>
            <option value="F">Feminino</option>
            <option value="M">Masculino</option>
        </select>
        <input type="hidden" name="acao" id="acao" value="criar conta">
        <br>
        <br>
        <input type="submit" value="Criar conta">

    </form>
</body>
</html>