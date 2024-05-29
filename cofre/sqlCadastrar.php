<?php 
    # Conexao
     include('includes/conexao.php');

     # dados do form
     var_dump($_POST);
     $nome = $_POST['nome'];
     $sobrenome = $_POST['sobrenome'];
     $cpf = $_POST['cpf'];
     $email = $_POST['email'];
     $login = $_POST['login'];
     $senha = $_POST['senha'];
     $setor = $_POST['setor'];

    # Query = Comando SQL
    $query = "INSERT INTO TABELA (nome, sobrenome, cpf, email, login, senha, setor) VALUES ($nome, $sobrenome, $cpf, $email, $login, $senha, $setor)";
    var_dump($query);
    //Validação
    
    $sql = $conexao->prepare($query);
    if($sql->excute()){
        echo 'Cadastrou!';
    }else{$mensagem ='echo';}


?>