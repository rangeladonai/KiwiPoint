<?php
if (isset($_SESSION)){
    unset($_SESSION);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERRO 404</title>
    <!--Lib-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!--CSS. Cole aqui embaixo o CSS proprio da pagina-->
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
    <div class="container">
        <h1> ERRO 404: <br>  Página solicitada<span style="color: red;"> NÃO ENCONTRADA</span></h1>
        <span>Aguarde ser redirecionado!</span>
        <div id="timer">
            <script>
                function updateTimer() {
                    var timerElement = document.getElementById("timer");
                    var count = 5; // Valor inicial do cronômetro

                    // Inicia um intervalo a cada segundo
                    var countdown = setInterval(function() {
                        // Exibe o número atual do cronômetro
                        timerElement.innerText = count;

                        // Verifica se chegou a zero
                        if (count === 0) {
                            debugger;
                            clearInterval(countdown); // Para o intervalo
                            window.location.href = '../view/home.php';
                        }

                        count--; // Decrementa o valor do cronômetro
                    }, 1000);
                }

                    // Chama a função para iniciar o cronômetro
                updateTimer();
            </script>
        </div>
    </div>
</body>
</html>