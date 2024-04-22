<?php
    $acao = $_POST['acao'];

    if ($acao === 'entrar'){
        $usuario = $_POST['user'];
        $senha = $_POST ['senha'];

        $arquivo = fopen('pessoas.csv', 'r');

        $pessoas = [];

        while($linha = fgetcsv($arquivo)) {
            $arrayLinha = explode(';',$linha[0]);

            $pessoa = [
                'id' => $arrayLinha[0],
                'nome' => $arrayLinha[1],
                'senha' => $arrayLinha[2],
                'idade' => $arrayLinha[3],
                'sexo' => $arrayLinha[4],
            ];

            array_push($pessoas,$pessoa);
            
        }

        $usuarioEncontrado = false;
        
        foreach($pessoas as $pessoa) {
          if($usuario == $pessoa['nome'] && $senha == $pessoa['senha']){
            $usuarioEncontrado = true;
            break;
          }  
       }
            
        session_start();
        
        if ($usuarioEncontrado === true ) {
            $_SESSION['logado'] = true;

            header('Location: telaProdutos.php');
        }
        else {
            header('Location: telaLogin.php');
        }
        
        exit();
    }
    
    elseif($acao === 'cadastrar'){
        $descricao = $_POST['descricao'];

        
        $preco = floatval($_POST['preco']);
        
        $arquivo = fopen('products.csv','r');

        $produtos = [];
    
        while ($linha = fgetcsv($arquivo)) {
            $arrayLinha = explode(";", $linha[0]);
    
            $produto = [
                'codigo' => $arrayLinha[0],
                'descricao' => $arrayLinha[1],
                'preco' => $arrayLinha[2],
            ];
    
            array_push($produtos,$produto);
        }
           
        fclose($arquivo);

        $arquivo = fopen('products.csv','a');
        
        
                $produto = [
                    count($produtos) + 1,
                 $descricao,
                 $preco   
                ];

        fputcsv($arquivo,$produto, ";");

        fclose($arquivo);

        header('Location: telaProdutos.php');
        exit();
    }
    elseif ($acao === "criar conta"){
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $idade = $_POST['idade'];
        $genero = $_POST['sexo'];
        
        
    $arquivo = fopen('pessoas.csv','r');
        
    $id = [];
        
    while ($linha = fgetcsv($arquivo)){
        $arrayconta = explode(';', $linha[0]);

        $conta = [
            'id' => $arrayconta[0],
            'nome' => $arrayconta[1],
            'senha' => $arrayconta[2],
            'idade' => $arrayconta[3],
            'sexo' => $arrayconta[4]
        ];
        
        
        array_push($id,$conta);
    }
    
    fclose($arquivo);

    $arquivo = fopen('pessoas.csv','a');
    

        $conta = [
                count($id) + 1,
            $nome,
            $senha,
            $idade,
            $genero
                ];
    fputcsv($arquivo,$conta,";");
    fclose($arquivo);
    header('Location: telaCadastroPessoa.php');
    exit();


}

?>