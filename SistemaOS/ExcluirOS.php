<!doctype html>
<html>

<head>
<?php
include "estilo.php"
?>
<title>Exclusão OS</title>

</head>

<body>


    <?php
    include "conexao.php";

    $id = $_POST['id'];
    
    $sql = "DELETE FROM `os` WHERE id_os = $id";
    
        if (mysqli_query($conn, $sql))   {
            echo  '<div style="border: 15px groove #d40000; background-color: white; font-size:5.25em;color:#000000;font-weight:bold;text-align:center;">Pedido Excluido!!!</div>';
            header( "refresh:5;url=listarOSandamentolivre.php" );    


        }else
        echo "Erro ao excluir Ordem de serviço";
    ?>


</body>


</html>