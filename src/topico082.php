<?php
//        0       1          2           3            4
 $nomes=["Fulano","Beltrano","Sicrano", "Astrogildo","Bete"];
$total = count($nomes);//5
echo "Foram encontradas $total nomes no array.<br>";
echo "Primeiro valor do array: ".$nomes[0]."<br>";
echo "Último valor do array: ".$nomes[count($nomes)-1];
echo "<hr>";
for($i=0;$i<count($nomes);$i++){
	echo $nomes[$i]."<br>";
}
?>
<hr>
<?php
$uf=["SP","RJ","ES","MG"];
array_pop($uf);//MG
echo "<pre>";print_r($uf);echo "</pre>";
array_push($uf, "TO");
array_push($uf, "BA");
array_push($uf, "RN");
array_push($uf, "PR");
array_pop($uf);//PR


echo "<pre>";print_r($uf);echo "</pre>";
sort($uf);
echo "<pre>";print_r($uf);echo "</pre>";
?>
UF <select name="UF">
<option>Selecione UF</option>
<?php
for($i=0;$i<count($uf);$i++)
echo "<option>".$uf[$i]."</option>";
?>
</select>
<hr>
<?php
$estudante=[
    "id"   => 1,
    "ra"   => 912123123,
    "nome" => "Bete",
    "curso"=>"TADS"
];
foreach ($estudante as $pos=>$valor) {
    echo "$pos: $valor<br>";
}
echo "<hr>";
$multi=[
    [10,"navio",30],
    [40,50,60],
    ["agua",80,"submarino"]
];
for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        echo $multi[$i][$j]." ";
    }
    echo "<br>";
}
?>
