<?php 
    
    // import do arquivo para conectar no BD
    require_once('bd/conexao.php');
    //Abre a conexão com o BD e guarda na variavel local $conexao    
    $conexao = conexaoMysql();

    //Declaração de Variaveis
    $modo = (string) null;
    $id = (int) 0;
    $nome = (string) null;
    $login = (string) null;
    $nickName = (string) null;
    $senha = (string) null;
    $email = (string) null;

    //Essa variavel será utilizada no action do form, para diferenciar as ações de
    //inserir um novo registro ou atualizar um registro existente
    $action = (string) "bd/inserirUsuario.php";

    //Valida se existe a variavel modo e a variavel id na url do 
    //navegador, se existir é pq foi clicado no botão editar
    if(isset($_GET['modo']) && isset($_GET['id']))
    {
        //Recebe o conteudo da variavel modo (em MAIUSCULO)
        $modo = strtoupper($_GET['modo']);
        
        //Recebe o conteudo da variavel id
        $id = $_GET['id'];
        
        //Valida se a variavel modo tem o valor editar
        if($modo == 'EDITAR')
        {
            //Script para buscar no BD
            $sql = "select * from tblusuario where idusuario=".$id;
            
            //Executa o script no BD
            $select = mysqli_query($conexao, $sql);

            //Valida se existe algum registro no BD e converte 
            //o resultado em um array
            if($arrayRegistro = mysqli_fetch_assoc($select))
            {
                //Recebe os dados do BD e guarda em variaveis locais
                $nome = $arrayRegistro['nome'];
                $login = $arrayRegistro['login'];
                $nickName = $arrayRegistro['nickname'];
                $senha = $arrayRegistro['senha'];
                $email = $arrayRegistro['email'];

                //Altera o arquivo que será chamado pelo form, pois precisamos editar os dados
                $action = "bd/editarUsuario.php?id=".$id;
                

            }
        }
    }

?>

<!DOCTYPE>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Cadastro de Usuários </title>
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <script src="js/jquery.js"></script>
        <script>
            
            $(document).ready(function () {
                 
                 //função para abrir a modal
                $('.pesquisar').click(function () {
                    $('#containermodal').fadeIn(1000);
                });

                //função para fechar modal
                $('.Excluir').click(function () {

                    $('#containermodal').fadeOut();
                });
            });

        </script>

    </head>
    <body>

        <div id="containermodal">
            <img src="img/trash.png" alt="Excluir" class='Excluir'>
         
        <div id="modal">
            
        </div>


        </div>



        <div id="cadastro"> 
            <div id="cadastroTitulo"> 
                <h1> Cadastro de Usuários </h1>
            </div>
            <div id="cadastroInformacoes">
                               
                <form action="<?=$action?>" name="frmCadastro" method="post" >
                   
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> Nome: </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="text" name="txtNome" value="<?=$nome?>" placeholder="Digite seu Nome" maxlength="100">
                        </div>
                    </div>
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> NickName: </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="text" name="txtNickName" value="<?=$nickName?>">
                        </div>
                    </div>
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> Login: </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="text" name="txtLogin" value="<?=$login?>">
                        </div>
                    </div>
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> Senha: </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="password" name="txtSenha" value="<?=$senha?>" maxlength="20">
                        </div>
                    </div>
                    <div class="campos">
                        <div class="cadastroInformacoesPessoais">
                            <label> Email: </label>
                        </div>
                        <div class="cadastroEntradaDeDados">
                            <input type="email" name="txtEmail" value="<?=$email?>">
                        </div>
                    </div>
                    <div class="enviar">
                        <div class="enviar">
                            <input type="submit" name="btnEnviar" value="Salvar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div id="consultaDeDados">
            <table id="tblConsulta" >
                <tr>
                    <td id="tblTitulo" colspan="5">
                        <h1> Lista de Usuários</h1>
                    </td>
                </tr>
                <tr id="tblLinhas">
                    <td class="tblColunas destaque"> Nome </td>
                    <td class="tblColunas destaque"> NickName </td>
                    <td class="tblColunas destaque"> Login </td>
                    <td class="tblColunas destaque"> Opções </td>
                </tr>
                
               <?php 
                    //Script para listar os dados do BD
                    $sql = "select * from tblusuario order by idUsuario desc";

                    //Executa no BD o script e guarda o retorno na variavel $select
                    $select = mysqli_query($conexao, $sql);

                    //converte o resultado do BD em um array de dados ($arrayUsuarios)
                    while ($arrayUsuarios = mysqli_fetch_assoc($select))
                    {
                    ?>
                        <tr id="tblLinhas">
                            <td class="tblColunas registros"><?=$arrayUsuarios['nome']?></td>
                            <td class="tblColunas registros"><?=$arrayUsuarios['nickname']?></td>
                            <td class="tblColunas registros"><?=$arrayUsuarios['login']?></td>
                            <td class="tblColunas registros">
                                <a href="index.php?modo=editar&id=<?=$arrayUsuarios['idusuario']?>">
                                    <img src="img/edit.png" alt="Editar" title="Editar" class="editar">
                                </a>
                                <a onclick="return confirm('Deseja realmnte excluir?');" href="bd/excluirUsuario.php?modo=excluir&id=<?=$arrayUsuarios['idusuario']?>">
                                    <img src="img/trash.png" alt="Excluir" title="Excluir" class="excluir">
                                </a>
                                <img src="img/search.png" alt="Visualizar" title="Visualizar" class="pesquisar">
                            </td>
                        </tr>
                    <?php 
                    }
                    ?>            
            </table>
        </div>
    </body>
</html>