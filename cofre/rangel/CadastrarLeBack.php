<?php
include ('../includes/conexao.php');
include ('../includes/funcao.php');
include ('../includes/header.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar se o arquivo foi enviado sem erros
    if (isset($_FILES["arquivo"]) && $_FILES["arquivo"]["error"] == 0) {
        // Verificar se o arquivo é um arquivo Excel
        $extensoes_permitidas = array('xls', 'xlsx');
        $extensao_arquivo = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
        if (in_array($extensao_arquivo, $extensoes_permitidas)) {
            // Mover o arquivo para uma pasta temporária
            $caminho_temporario = $_FILES['arquivo']['tmp_name'];
            if($aniversario == ''){
                $aniversario = '1900-01-01';
            }
            $genero = $_POST['genero'];
            $cargo = $_POST['cargo'];
            $setor = $_POST['setor'];
            $endereco = $_POST['endereco'];
            $participa_clube = $_POST['participa_clube'];
            $categoria_interesse = $_POST['categoria_interesse'];
            $ciente_parceria = $_POST['ciente_parceria'];
            $data_cadastro = date('Y-m-d');
            
            $query = "INSERT INTO LEBACK_FORM (
                                    empresa,
                                    cnpj,
                                    grupo,
                                    nome,
                                    cpf,
                                    email,
                                    telefone,
                                    aniversario,
                                    genero, 
                                    cargo,
                                    setor,
                                    endereco,
                                    participa_clube,
                                    categoria_interesse,
                                    ciente_parceria,
                                    data_cadastro
                                ) VALUES (
                                    '$empresa',
                                    '$cnpj',
                                    '$grupo',
                                    '$nome',
                                    '$cpf',
                                    '$email',
                                    '$telefone',
                                    '$aniversario',
                                    '$genero',
                                    '$cargo',
                                    '$setor',
                                    '$endereco',
                                    '$participa_clube',
                                    '$categoria_interesse',
                                    '$ciente_parceria',
                                    '$data_cadastro'
                                )
            ";
            
            
            $sql = $conexao->prepare($query);
            try{
                if($sql->execute()){
                    $mensagem = 'Cadastro realizado com sucesso!';
                    $_SESSION['msg'] = $mensagem;
                    $link = "dashboard.php";
                    redirect($link);
                }
            }catch(Exception $e){
                $mensagem = $e->getMessage();
                $mensagem = "Erro ao cadastrar! ".$mensagem;
                $_SESSION['msg'] = $mensagem;
                $link = "dashboard.php";
                redirect($link);
            }
            
            
        
            echo "Upload e processamento concluídos com sucesso.";
        } else {
            echo "Apenas arquivos Excel são permitidos.";
        }
    } else {
        echo "Erro ao enviar o arquivo.";
    }
}
?>



