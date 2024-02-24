<!DOCTYPE html>
<html>

<head>
    <?php
        include "header.php";
        include "estilo.php";
    ?>
    <title>Verificação de Senha</title>
    <script language="JavaScript">
    function checkPassword() {
        var passwordInput = document.getElementById("password");
        var password = passwordInput.value;

        // Aqui você pode inserir a mesma senha usada no código PHP
        var pass1 = "mecao43";

        if (password === pass1) {
            // Redireciona para a página protegida com um token seguro na URL
            window.location.href = "listarOSfinalizada.php?token=" + encodeURIComponent(password);
        } else {
            alert('Senha incorreta!');
        }
    }
    </script>
</head>

<body>
    <div class="telabranca">
    <label class="divtextologin" for="password">Digite sua senha:</label><br>
    <input class="inputlogin" type="password" id="password"><br>
    <button class="bnt" onclick="checkPassword()">Acessar</button>
</div>
</body>

</html>