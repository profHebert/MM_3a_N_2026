<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Semáforo</title>
</head>
<body>

<form method="post" action="teste123.php">
<button type="submit" name="cor" value="verde">Verde</button>
<button type="submit" name="cor" value="amarelo">Amarelo</button>
<button type="submit" name="cor" value="vermelho">Vermelho</button>
</form>



<?php

$cor = $_POST['cor'] ?? '';

if ($cor === 'verde') {
echo "Siga!";
} elseif ($cor === 'amarelo') {
echo "Atenção!";
} elseif ($cor === 'vermelho') {
echo "Pare!";
} else {
echo "Escolha ($cor) uma opção válida.";
}

?>