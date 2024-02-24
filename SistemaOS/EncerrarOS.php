<!doctype html>
<html>

<head>

<title>Fechamento OS</title>

</head>

<body>


    <?php
    include "conexao.php";

    $id = $_POST['id'];
    $diagnostico = $_POST['diagnostico'];

    
    $sql = "UPDATE `os` set fechada = 'sim', diagnostico = '$diagnostico' WHERE id_os = $id" ;
    
        if (mysqli_query($conn, $sql))   {
            echo "Ordem de serviço encerrada com sucesso!!!";
            header( "refresh:5;url=listarOSandamento.php" );    


        }else
        echo "Erro ao encerrar Ordem de serviço";
    ?>


</body>


</html>