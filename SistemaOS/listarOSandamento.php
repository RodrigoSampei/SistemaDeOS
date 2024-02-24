<?php
// Verifica se o token de autenticação é válido
if (isset($_GET['token'])) {
    // Aqui você deve usar a mesma senha usada no JavaScript
    $correctPassword = "mecao43";
    $providedToken = $_GET['token'];
    
    if ($providedToken === $correctPassword) {
        // Token correto, exibe o conteúdo da página protegida
?>
<!doctype html>
<html>

<head>

    <?php
        include "header.php";
        include "estilo.php";
        ?>
    <title>ordens de serviço (OS)</title>
    <h1> ORDENS ABERTAS</h1>

</head>


<body>
    <?php

    $pesquisa = $_POST['busca'] ?? '';

    include "conexao.php";

    $sql = "SELECT * FROM os WHERE nome LIKE '%$pesquisa%'";

    $dados = mysqli_query($conn, $sql);

    

    ?>



    <table class="tabela">
        <tr>
            <th>Graduação</th>
            <th>Nome</th>
            <th>Esquadrão</th>
            <th>Data Registro</th>
            <th>Descrição</th>

        </tr>
        <tr>
            <?php
    
    

    while($linha = mysqli_fetch_assoc($dados)  ) {
        
        
        $id_os = $linha['id_os'];
        $fechada = $linha['fechada'];
        $graduacao = $linha['graduacao'];
        $nome = $linha['nome'];
        $esquadrao = $linha['esquadrao'];
        $data_reg = $linha['data_reg'];
        $descricao = $linha['descricao'];
        $imagefinalizar = '<img class="icones" src="imagens/finalizar.png" />';
        $imageexcluir = '<img class="icones" src="imagens/excluir.png" />'; 

        if($fechada == "não"){
            #neste echo percorre a lista e prenche caso seja uma os não finalizada podendo excluir ela ou confirmar a os
        echo "      <tr>
                    
                  <td class='tdmostra' <p align='center'>$graduacao</td>
                  <td  class='tdmostra'<p align='center'>$nome</td>    
                  <td  class='tdmostra'<p align='center'>$esquadrao</td>    
                  <td  class='tdmostra'<p align='center'>$data_reg</td> 
                  <td  class='tdmostra' <p align='center'>$descricao</td>

                  <form action='diagnosticoOS.php' method='POST'>
                  <input type='hidden' name='id' id='id_os' value='$id_os'>
                  <td> <button class='iconesbnt' <p align='center'> $imagefinalizar</button>
                  </form>

                  <form action='ExcluirOS.php' method='POST'>
                  <input type='hidden' name='id' id='id_os' value='$id_os'>
                  <button class='iconesbnt' <p align='center'> $imageexcluir</button>

                  </form>
                    </td>

                  

                 
                    </tr>"
        
        ;}
        
    ;}
    

    ?>
        </tr>
    </table>

</body>

</html>
<?php
    } else {
        // Token incorreto ou acesso direto à página protegida
        echo "Acesso não autorizado!";
    }
} else {
    // Redireciona para a página de entrada
    header("Location: index.php");
    exit();
}
?>