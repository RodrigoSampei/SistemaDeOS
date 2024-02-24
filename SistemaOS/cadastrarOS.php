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
<form class="formtable" action="cadastrarOS_script.php" method="POST">
    <div class="form-group">
        <div class="divtexto">Graduação</div><br>
        <select  name="graduacao" id="graduacao">
        
            <option value="CEL">CEL</option>
            <option value="TC">TC</option>
            <option value="MAJ">MAJ</option>
            <option value="CAP">CAP</option>
            <option value="1ºTEN">1ºTEN</option>
            <option value="2ºTEN">2ºTEN</option>
            <option value="ASP">ASP</option>
            <option value="SUB TEN">SUBTEN</option>
            <option value="1ºsgt">1ºSGT</option>
            <option value="2ºSGT">2ºSGT</option>
            <option value="3ºSGT">3ºSGT</option>
            <option value="CB">CB</option>
            <option value="SD">SD</option>
            
        </select>
    </div><br>

    <div class="form-group">
        <div class="divtexto">Nome</div><br>
        <input class="inputs" type="text" id="nome" name="nome">
    </div><br>

    <div class="form-group">
        <div class="divtexto">Esquadrão</div><br>
        <select class="inputs"name="esquadrao" id="esquadrao">
            <option value="CA P">C AP</option>
            <option value="1ºESQD">1ºESQD</option>
            <option value="2ºESQD">2ºESQD</option>
            <option value="3ºESQD">3ºESQD</option>
            <option value="NPOR">NPOR</option>
        </select>
    </div><br>

    <div class="form-group">
        <div class="divtexto">Data do pedido</div>

            <?php
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('d/m/Y');
        echo "<p align='center'><font color=black  size='6pt'>$date</font>";
            ?>
            
    </div>

    <div class="form-group">
        <div class="divtexto">Descrição do problema</div><br>
        <textarea class="descricao" type="text" id="descricao"  name="descricao"></textarea>

    </div><br>

    <div class="form-group">
        <input type="submit" class="bnt">
    </div>
    <br>
</form>    
</body>


</html>