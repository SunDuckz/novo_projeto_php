<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Produto</title>
</head><?php
    session_start();

    if (!isset ($_SESSION['logado'])){
        header('Location: telaLogin.php');
        exit();
    }
?>
<body>
    <?php
        require 'menu.html';
    ?>
    <h1>Cadastro de Produto</h1>
    <br>
    <form action="controller.php" method="post">
        <label for="descricao">Descrição</label>
        <br>
        <input type="text" name="descricao" id="descricao"required>
        <br>
        <label for="preco">Preço</label>
        <br>
        <input type="number" name="preco" id="preco" step="any"required>
        <br>
        <br>
        <input type="hidden" name="acao" id="acao" value="cadastrar">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>