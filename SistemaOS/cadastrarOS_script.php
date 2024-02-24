<!doctype html>
<html>

<head>

<title>OS</title>

</head>

<body>


    <?php
    include "estilo.php";
    #inclue o script de conexao para ser utilizado
    include "conexao.php";
        #define o horario padrão do Brasil
        date_default_timezone_set('America/Sao_Paulo');

        #busca as variaveis do formulario do cadastro
        $graduacao = $_POST['graduacao'];
        $nome = $_POST['nome'];
        $esquadrao = $_POST['esquadrao'];
        $data_reg = date('d/m/Y | H:i');
        $descricao = $_POST['descricao'];
        $fechada = 'não';
        $diagnostico = '';


        #transforma o $nome e $descricao em Maisculo e logo em seguida coloca ele no banco de dados 
        $nome2 = strtoupper($nome);
       

        #coleta os dados de cima e insere na tabela
        $sql ="INSERT INTO `os`
        ( `graduacao`, `nome`, `esquadrao`, `data_reg`, `descricao`, `fechada`,`diagnostico`)
        VALUES ('$graduacao','$nome2','$esquadrao','$data_reg','$descricao','$fechada','$diagnostico')";

        #caso de certo o registro aparece executa essa função
        if (mysqli_query($conn, $sql))   {
            echo  '<div style="border: 15px groove #d40000; background-color: white; font-size:5.25em;color:#000000;font-weight:bold;text-align:center;">Pedido Registrado!!!</div>';
            header( "refresh:5;url=listarOSandamentolivre.php" );

        #caso de errado aparece está mensagem
        }else
        echo "Erro ao cadastrar Ordem de serviço";
    ?>


</body>


</html>