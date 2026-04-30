<?php
$i=0;
while($i<=10){
    echo "$i ";
    //$i++;$i++;
    //$i++//$i=$i+1//$i+=1
    $i+=2;

}
/*
saída: 0 1 2 3 4 
1) valor inicial? 0
2) condição? $i<5
3) contador? $i++
4) Quantas vezes o código será executado? 5
5) O valor que tornou a condição como falsa? 5

saída: 11 12 13 14
1) 11
2) $i<15 ou $i<=14
3) $i++
4) 4
5) 15

saída: 4 3 2 1 0
1) 4
2) $i>=0 ou $i>-1
3) $i--
4) 5
5) -1

saída: 0 2 4 6 8 10
1) 0
2) $i<=10 ou $i<12 
3) $i+=2
4) 6
5) 12
*/

echo "<hr>";
$i=7;
do{
    echo "$i ";
    $i++;
}while($i<5);
echo "<hr>";
for($i=0;$i<5;$i++) 
    echo "$i ";
echo "<hr>";
for($i=0;$i<3;$i++){//ext //min
    for($j=0;$j<4;$j++){//int //seg
        echo "$i $j<br>";
    }
}
/*
$i $j
0  0
0  1
0  2
0  3
1  0
1  1
1  2
1  3
2  0
2  1
2  2
2  3
*/
?>