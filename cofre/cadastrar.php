<!DOCTYPE html>
<html lang="en">
<head>
<Style>
        body{font}
    </Style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> <label>Cadastro</label></h2>
<form action="sqlCadastrar.php" method="POST">    
        <label>Name:</label>
        <input type="text" name="nome" id="nome">
        <br>
 <label>Sobrenome:</label>
        <input type="text" name="sobrenome" id="sobrenome">
        <br>
     <label>Cpf:</label>
        <input type="text" name="cpf" id="cpf">
        <br>
<label>Email:</label>
        <input type="text" name="email" id="email">
        <br>
 <label>Login:</label>
        <input type="text" name="login" id="login">
        <br>
 <label>Senha:</label>
        <input type="password" name="senha" id="senha"
        br>
 <label>Setor:</label>
     <select name="setor" id="setor">
        <option>Financeiro</option>    
        <option>Tecnologia da Informação</option>
        <option>Juridico</option>
        <option>Operacional</option>
        <option>Atendimento</option>
        <option>Desenvolvimento Pessoal</option>
        <option>Monitoria</option>
        <option>Localização</option>
        <option>Comercial</option>
        <option>Gestão</option>
        <option>Diretoria</option>
        <option>Custumer</option>
    </select>
        <br>
<input type= "submit" Value= "Cadastrar">
        <br>
        <hr>
    </form>     
</body>
</html>