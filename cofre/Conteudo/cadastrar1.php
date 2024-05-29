<?php

include("classe/conexao.php");
if(isset($_POS['confirmar']))

//1 - Registro de dados 
if(!isset($_SESSION))
session_start();

foreach($_POST as $chave=>$valor)
    $_SESSION[$chave] = $valor;

//2 - Validação dos dados
if(strlen($_SESSION['nome'])==0)
$erro[] = "preencha o nome.";

if(strlen($_SESSION['sobrenome'])==0)
$erro[] = "preencha o sobrenome.";

if(substr_count($_SESSION['email'],'@')!=1||substr_count($_SESSION['email'],'.')< 1||substr_count($_SESSION['email'],'.')> 2)
$erro[] = "preencha o email corretamente.";

if(strlen($_SESSION['niveldeacesso'])==0)
$erro[] = "preencha o sobrenome.";

if(strlen($_SESSION['senha'])< 8 || strlen($_SESSION['senha']) > 16)
  $erro[] = "preencha a senha corretamente.";

if(strcmp($_SESSION['senha'], $_SESSION['rsenha']) !=0)
$erro[] = "As senhas não batem"

  //3 - Insreção no banco e redirecionamento 




?>

<h1>Cadastrar Usuario</h1>
<form action="index.php?p=cadastrar"method="POST">
<a href="index.php?p=inicial">Voltar</a>

<label for="nome">Nome</label>
<input name="name"value="" required type="text">
<p class=espaço></p>

<label for="sobrenome">Sobrenome</label>
<input name="sobrenome"value="" required type="text">
<p class=espaço></p>

<label for="email">E-mail</label>
<input name="email"value="" required type="email">
<p class=espaço></p>

<label for="sexo">sexo</label>
<select name="sexo">
    <option value="">Selecione</option>
    <option value="1">Masculino</option>
    <option value="2">Feminino</option>
    <option value="3">Outros</option>
</select>
<p class=espaço></p>


<label for="niveldeacesso">Nível de Acesso</label>
<select name="niveldeacesso">
    <option value="">Selecione</option>
    <option value="1">Basico</option>
    <option value="2">Gestão</option>
    <option value="3">Admin</option>
    <option value="4">Diretoria</option>
</select>


<br><br><label for="senha">Senha</label>
A senha deve ter entre 8 e 16 caracteres.
<input name="senha"value="" required type="Password">
<p class=espaço></p>

<label for="rsenha">Repita a Senha</label>
<input name="rsenha"value="" required type="Password">
<p class=espaço></p>

<input value="Salvar"name="confirmar" type="submit">



</form>