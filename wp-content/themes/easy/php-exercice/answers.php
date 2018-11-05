<?php


// Display - 1

echo 'test echo';

echo 'whatever numbers 12 12  12 ';

$n = 12;
echo " le nombre est égal à $n" ;

echo '12';

echo ' i\'ll echo \'special characters\' ';

$condition =  ($n == 12) ? "n est égal à 12 " : " n n'est pas égal à 12";

echo  ' test echo ' . " le nombre est égal à $n" . $condition;



//Display all numbers between 1 and 10 (including 10) using a `while` loop
$x = 1;
while ($x<=10){
    echo $x++;    
}


for ($x=1 ; $x<=10; $x++){
    echo $x;    
}

function oneToTen(){
    $x = 1;
    while ($x<=10){
        echo $x++;    
    }
}

oneToTen();

function oneToParam($max){
    $x = 1;
    while ($x<=$max){
        echo $x++;    
    }
}

oneToParam(20);







