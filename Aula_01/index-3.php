<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saudação</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Seja bem vindo!</h1>
    <?php
        date_default_timezone_set("America/Sao_Paulo");
        $usuario = "Cristiano Morais";
        $hora = date("H");
        if ($hora >= 0 && $hora < 12) {
            $saudacao = "Bom dia, $usuario!";
        } elseif ($hora >= 12 && $hora < 18) {
            $saudacao = "Boa tarde, $usuario !";
        } else {
            $saudacao = "Boa noite, $usuario!";
        }
    ?>
    <!--Código em uma DIV para encaixe do Modal-->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="fecharModal()">&times;</span>
            <p id="mensagem"></p>
        </div>
    </div>
    
    <script>
        function abrirModal(mensagem) {
            document.getElementById("mensagem").innerText = mensagem;
            document.getElementById("modal").style.display = "block";
        }
        
        function fecharModal() {
            document.getElementById("modal").style.display = "none";
        }
        
        window.onload = function() {
            abrirModal("<?php echo $saudacao; ?>");
        };
    </script>
</body>
</html>