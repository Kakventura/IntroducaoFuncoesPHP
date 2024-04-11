<?php

    if(isset($_POST['dolar']) && isset($_POST['real'])){
        $dolar = $_POST['dolar'];
        $real = $_POST['veal'];
        
        function conversao($real, $dolar){
            return $real / $dolar;
        }
        
        $dolares = conversao($real, $dolar);
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Conversor de Dólar</h2>
        <form method="POST">
            <div class="form-group">
                <label for="valorDolar">Valor em reais (R$):</label>
                <input type="number" class="form-control" name="real" placeholder="Determine o valor em reais (R$):">
            </div>
            <div class="form-group">
                <label for="valorReal">Valor do dólar ($):</label>
                <input type="number" class="form-control" name="dolar" placeholder="Determine a cotação do valor do dólar ($):">
            </div>
            <div class="form-group">
                <label for="resultado">Resultado:</label>
                <!-- EXIBIÇÃO DE RESULTADOS -->
                <input type="text" class="form-control" name="resultado" value="<?php if(isset($dolares)){ echo $dolares; } ?>" disabled>
            </div>
            <button type="submit" class="btn btn-primary">Converter</button>
        </form>
    </div>
</body>
</html>