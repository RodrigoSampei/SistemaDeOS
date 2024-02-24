<!doctype html>
<html>

<head>
        <?php
        include "header.php";
        include "estilo.php";
        ?>
    <title>ordens de serviço (OS)</title>
    <h1> Cadastrar Ordem De Serviço</h1>

</head>

<body>

</body>
<?php
include "conexao.php";

    $id = $_POST['id'];


              ?>  
              
                    <form action='EncerrarOS.php' method='POST'>
                        <?php echo "
                  <input type='hidden' name='id' id='id' value=$id>
                  "?>
                  <div class="divtexto">Diagnostico do problema</div>
                  <textarea class="descricao" type="text" id="diagnostico"  name="diagnostico"></textarea>
                  <button class="bnt" onclick="checkPassword()">Finalizar</button>

                  </form>

                
</html>