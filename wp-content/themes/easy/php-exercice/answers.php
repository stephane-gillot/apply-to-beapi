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
        echo '<br/>';    
    }
}

oneToTen();

function oneToParam($max){
    $x = 1;
    while ($x<=$max){
        echo $x++;
        echo '<br/>';    
    }
}

oneToParam(20);

// Arrays
$a = array(5, 12, 10, 21, 2, 6, 8, 20, 14, 9, 12);


function displayUn($a){
    
    foreach ($a as $value){
        echo $value;
        echo '<br/>';
    }
} 

displayUn($a);

function displayMoyenne($a){
    $s = array_sum($a);
    $nb = count($a);
    echo $s/$nb;
}

displayMoyenne($a);


function displayThree($a){
    $r = 0;
    foreach ($a as $value){
        if ($value >= 10) {
            $r++;
        }
    }
    echo $r;
}

displayThree($a);

function displayFour($a){
    if (in_array(20, $a,true)){
        echo '20 est présent';
    } else {
        echo '20 est absent';
    }
}

displayFour($a);



function displayFifth($a){
    rsort($a);
    echo $a[0];
}

displayFifth($a);
