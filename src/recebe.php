<?php
echo"<pre>";print_r($_GET);echo "</pre>";
$login=$_POST["login"];
$senha=$_POST["senha"];

echo "Login: <b>$login</b><br>";
echo "Senha: <b>$senha</b><hr>";