<?php
$a=10;
$a=30;
$a=5;
echo "a = $a";
//    0  1  2
$arr=[10,30,5];
echo "<br>arr[0] = ".$arr[0];
echo "<br>arr[1] = ".$arr[1];
echo "<br>arr[2] = ".$arr[2];
$uf=["SP","RJ","MG","ES"];
echo "<br>".$uf[2];//MG
//echo "<pre>";print_r($uf);echo "</pre>";
$estudante=[
    "id"   => 1,
    "ra"   => 912123123,
    "nome" => "Bete",
    "curso"=>"TADS"
];
//mostrar todos os valores de $estudante
echo "<pre>";print_r($estudante);echo"</pre>";
echo "<br>id: ".$estudante["id"];
echo "<br>ra: ".$estudante["ra"];
echo "<br>nome: ".$estudante["nome"];
echo "<br>curso: ".$estudante["curso"];
/*
Criar a saída a seguir:
id: 1
ra: 912123123
nome: Bete
curso: TADS
*/
//$multi=[[10,20,30],[40,50,60],[70,80,90]];
$multi=[
    [10,"navio",30],
    [40,50,60],
    ["agua",80,90,"submarino"]
];
echo "<hr>";
echo "<br>".$multi[0][1] ;//
echo "<br>".$multi[2][0] ;//
echo "<br>".$multi[2][3] ;//
$bd=[
    ["id"=>1,"nome"=>"Bete","curso"=>"TADS"],
    ["id"=>2,"nome"=>"Betina","curso"=>"TBD"],
    ["id"=>3,"nome"=>"Beto","curso"=>"TJD"]
];
echo "<br>".$bd[0]["nome"];//Bete
echo "<br>".$bd[1]["curso"];//TBD
echo "<br>".$bd[2]["id"];//3
?>