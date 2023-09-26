<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar IMC</title>
</head>
<body>
    <h1>Verificar IMC</h1>
    <form action="" name="imc"  method="POST">
        <label for="peso">Informe seu peso: </label>
        <input type="text" name="peso">
        <br>
        <br>
        <label for="altura">Informe sua altura: </label>
        <input type="text" name="altura">
        <br>
        <br>
        <input type="submit" value="Verificar" name="verificar">
    </form>
    
    <?php
        if(isset($_POST['verificar'])){
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];
            $imc = $peso/$altura**2;
            $imc = number_format($imc,2,",",".");

            if($imc < 18.5){
                echo "<br>Seu IMC é de $imc"."%. Você está abaixo do peso!";
            } else if($imc <= 24.9){
                echo "<br>Seu IMC é de $imc"."%. Você está no peso ideal!";
            } else if($imc <= 29.9){
                echo "<br>Seu IMC é de $imc"."%. Você está levemente acima do peso!";
            } else if($imc <= 34.9){
                echo "<br>Seu IMC é de $imc"."%. Você está com Obesidade grau 1!";
            } else if($imc <= 39.9){
                echo "<br>Seu IMC é de $imc"."%. Você está com Obesidade grau 2! É recomendável, procura médica!";
            } else if($imc >= 40){
                echo "<br>Seu IMC é de $imc"."%. Você está com Obesidade grau 3! É recomendável, procura médica!";
            }
        }
    ?>
</body>
</html>