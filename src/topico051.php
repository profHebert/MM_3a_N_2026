<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topico 5</title>
</head>
<body>
    <h1>Topico 05</h1>
    <form method="post" action="">
        Digite uma idade <input type="number" name="idade" id="idade" required><br>
        <input type="submit" value="Enviar!">
    </form>
    <?php
    if(count($_POST)==0) {exit;}
    echo "<hr>";
    $idade=$_POST["idade"];
    if($idade<18){
        echo "Idade de $idade, menor de idade";
    }
    else{
        echo "Idade de $idade, maior de idade";
    }

    ?>
</body>
</html>