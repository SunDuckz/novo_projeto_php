<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <?php
        require 'menu.html';
    ?>
    <h1>Login</h1>
    <br>
    <form action="controller.php" method="post">
        <label for="usuario">Usuário</label> <!-- texto em cima do formulario -->
        <br> 
        <input type="text" name="user" id="usuario" required> <!-- Local onde coloca o usuario 'input' -->
        <br>
        <label for="senha">Senha</label> <!-- texto dizendo senha -->
        <br>
        <input type="password" name="senha" id="senha" required> <!-- local da senha -->
        <br>
        <input type="hidden" name="acao" id="acao" value="entrar">
        <input type="submit" value="Entrar">
    </form>

</body>
</html>