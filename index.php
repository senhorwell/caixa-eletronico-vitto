<?php
    if(isset($_POST["caixa"])){
        include("Calculadora.php");
        $calculadora = new Calculadora();
        $calculadora->calcula($_POST["caixa"]);
    }
?>
<!DOCTYPE html>
<html class="h-100">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" type="image/png" href="https://sistemavitto.com.br/_assets/img/favicon.ico">
        <title>Caixa eletrônico</title>
    </head>
    <body class="h-100 d-flex align-items-center">
        <div class="container">
            <div class="card shadow bg-body rounded" style="background:#009cff;">
                <div class="d-flex justify-content-center align-items-center">
                    <h1 class="text-center py-4 pr-2" style="color:white;">Caixa eletrônico da</h1>
                    <img src="https://media-exp1.licdn.com/dms/image/C4E0BAQG3vd6zukzbwA/company-logo_200_200/0/1544026439147?e=2159024400&v=beta&t=0Yc2wMpF3ZQo5s9EwS1WqyQ5TrAtDPvYZYZ4zmEdCHw" style="width: auto;height: 90px;">
                </div>
                <div class="card mx-5 my-5" style="font-family: monospace;">
                    <p class="w-100 text-center">relatório de saques</p>
                    <p><?php if(isset($_SESSION["relatorio"]))echo $_SESSION["relatorio"]?></p>
                </div>
                <form name="form" action="" method="post">
                    <div class="result px-4 d-flex align-items-center" style="color:white;">
                        <h4>Valor total: </h4>
                        <h2 class="number pl-2"><strong>R$ 10.000,00</strong></h2>
                    </div>
                    <div class="form-group px-4">
                        <input type="number" class="form-control" id="caixa" name="caixa" value="0" min="0" max="10000" placeholder="Insira o valor">
                    </div>
                    <div class="form-group px-4">
                        <button type="submit" class="form-control">Sacar</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
