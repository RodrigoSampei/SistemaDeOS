<!DOCTYPE html>
<html>
<head>
    <?php
    include "estilo.php";
    include "header.php";
    ?>
    <title>Sistema De Ordens De Serviço</title>
 
    <h1>Sistema De Ordens De Serviço</h1>
</head>

<body>

<?php

$pesquisa = $_POST['busca'] ?? '';

include "conexao.php";

$sql = "SELECT * FROM os WHERE nome LIKE '%$pesquisa%'";

$dados = mysqli_query($conn, $sql);

$contadorsim = 0;

$contadornao = 0;


date_default_timezone_set('America/Sao_Paulo');
$date = date('Y');

while($linha = mysqli_fetch_assoc($dados)  ) {
        
        
        
        $fechada = $linha['fechada'];
        if($fechada == "sim"){
        $contadorsim++;
        }
        else{
        $contadornao++;    
        }
    
}

?>
<div class="telabranca">
    <div class="divtexto">O Sistema foi desenvolvido
         para atender as demandas da OM, gerenciando as (OS) e registrando os serviços de informática.
        </div><br>
    <?php
    echo "<div class='divtexto'> No momento existem $contadornao ordens de serviço em andamento</div><br>
         <div class='divtexto'> $contadorsim ordens de serviço finalizadas no ano de $date</div><br>"
    ?>
    <br>
</div>
</body>
</html>
