<?php

//inportando o arquivo de conexão com o BD 
require_once('conexao.php');

//declaração das variaveis

$nome = (string)null;
$login = (string)null;
$nickName = (string)null;
$senha = (string)null;
$email = (string)null;

//se o botão for clicado faça isso
if(isset($_POST['btnEnviar'])){

    $nome = $_POST['txtNome'];
    $login = $_POST['txtLogin'];
    $nickName = $_POST['txtNickName'];
    $senha = $_POST['txtSenha'];
    $email = $_POST['txtEmail'];


    
    //inserir dados no BD, atravez do que o cliente escrever no formulario
    //SQL (structured query language)
    $sql = "insert into tblusuario
    
        (nome, login, nickname, senha, email, dataCadastro)
    values ('".$nome."', '".$login."', '".$nickName."', '".$senha."', '" .$email."', '2021-10-27')
    ";

    //abrindo conexão com o banco 
    $conexao = conexaoMysql();

    if(mysqli_query($conexao, $sql))
        echo("Registro inserido com sucesso!");

     else
        
        echo("Não foi possivel Salvar no BD!");
}
?>