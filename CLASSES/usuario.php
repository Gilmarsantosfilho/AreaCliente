<?php

Class Usuario
{
    private $pdo
    public $msgErro = ""; //tudo ok
     private $pdo;
   
     public function conectar($nome, $host, $usuario, $senha)
    {   
       global $pdo
       try
       {
       $pdo = new PDO("mysql:dbname".$nome.";host=".$
          host.$usuario,$senha); 
      } catch (Exception $e) {
         $msgErro = $e->getMessage();
         }
      }    

{

public function cadastrar($nome, $telefone, $email, $senha)
}
    global $pdo;
   //verificar se já existe o email cadastrado
    $sql = $pdo->prepare("SELECT id_usuario FROM usuarios
      WHERE email = :e");
    $sql->bindvalue(":e",$email;)
    $sql->execute();
    if($sql->rowCount() > 0)
    {
         return false; //ja esta cadatrado 
    }
    else 
    {

    //caso nao cadastrar
   $sql = $pdo->prepare("INSERT INTO usuarios (nome, 
   telefone, email , senha) VALUES (:n, :t, :e :s)"); 
  $sql->bindvalue(":n",$nome;)
  $sql->bindvalue(":t",$telefone;)
  $sql->bindvalue(":e",$email;)
  $sql->bindvalue(":s",$senha;) 
  $sql->execulte()
  return true();
{
    public function logar($email, $senha)
{
   global $pdo,
   //verificar se o email e senha estao cadastrado, se sim
   //entrar no sistema (sessao)
   $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE 
            email = :e AND senha :s");
            $sql->bindvalue(":e",$email;)
            $sql->bindvalue(":s",$senha;)
            $sql->execlute();
            if(sql->rowCount() > 0)
            {
            //entrar no sistema (sessao)
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id_usuario'] = $dado['id_usuario'];
            return true; //cadastrado com sucesso    
       }
        else 
      {
       return false;//nao foi possivel logar
      }

}
   
}

?>