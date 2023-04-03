<?php
require _once 'CLASSES/usuario.php';
$u = new Usuario;
?>

<html lang="pt-br">
 <head>
     <meta charset="utf-8">
     <title>Login</title>
     <link rel="stylesheet" href="CSS/cadastro.css">
    </head>
<body>
<div id="corpo-form-cad">  
     <h1>Area de cadastro</h1>
      <form method="POST" acticon="processa.php">
      <input type="text" name="nome" placeholder="Nome Completo" maxlength="30">
      <input type="text" name="telefone" placeholder="Telefone"  maxlength="30">>
      <input type="email" name="email" placeholder="Usuario"  maxlength="40">
      <input type="password" name="senha" placeholder="senha" maxlength="15"> 
      <input type="password" name="confsenha" placeholder="Confirmar Senha" maxlength="30">
      <input type="submit" value="Finalizar Cadastro">
     <a href="login.html">Já tem cadastro então faça Fazer login</strong><strong><a>
</div>
<?php 
//verificar se clicou no botao
isset($_POST)['nome'])
{
    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $confirmarsenha = addslashes($_POST['confsenha']);

}
?>
</body>
</html>