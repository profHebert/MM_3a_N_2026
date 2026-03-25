<?php
$a=10;//10
$b=2;//2
$a+=$b;//$a=$a+$b//$a=10+2//$a=12
$b-=5;//$b=2-5//$b=-3
echo "a = ".$a;//a = 12
echo "<br>b = ".$b;//b = -3
$c=11;//$c=11
$d=6;//$d=6
$c%=$d;//$c=11%6//$c=5
$d+=$a;//$d=6+12//$d=18
echo "<br>c = ".$c;//c = 5
echo "<br>d = ".$d;//d = 18
echo "<hr>";
$x = 100;//$x=100
echo "x = ".$x++;//x = 100
echo "<br>x final = ".$x;//x final = 101
echo "<hr>";
$i=10;
echo "i = $i<br>";//i = 10
$i++;//11
$i++;//12
++$i;//13
echo "i = $i<br>";//i = 13
$i--;//12
--$i;//11
echo "i = $i<br>";//i = 11
echo "<hr>";
$a="10";// $a = 10   // int
$b="10";//$b = "10"// string
echo "Igualdade = ".($a==$b)."<br>";
echo "Idêntico = ".($a===$b)."<br>";
echo "Não igual = ".($a!=$b)."<br>";
echo "Não Idêntico = ".($a!==$b)."<br>";
echo "<hr>";
$a=10;
$b=10;
$c=11;
echo "Menor: ".($a<$b)."<br>";
echo "Menor ou igual: ".($a<=$b)."<br>";
echo "Maior: ".($c>$b)."<br>";
echo "Maior ou igual: ".($c>=$b)."<br>";
echo "<hr>";
$a=50;
$b=120;
$c=200;
$d= !($a<=$b);
var_dump($d);//false
echo "<br>";
$e=!($a<$b)&&($c>100);
var_dump($e);//false
$f=($a<=$b) xor !($c<=500);
var_dump($f);//true
?>