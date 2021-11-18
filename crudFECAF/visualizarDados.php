<?php

    $id = (int) 0;
    $nome = (int)0;
    $nickName = (string) null;
    $login = (string) null;  
    $email = (string) null;


    $id = $_GET['id'];

    //import do arquivo de conexão com o BD
    require_once('bd/conexao.php');

     //Abre a conexao com o BD   
    $conexao = conexaoMysql();

    $sql = "select * from tdlusuario
            where indusuario = ".$id;

     $select = mysqli_query(conexao, $sql);
     
     if($listUsuario = mysqli_fetch_assoc($select)){


     }


?>