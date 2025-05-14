<?php

// for( $i=1 ; $i <=5  ;$i = $i +1  ){

//     echo $i ."<br>";


// }


// $i = 5;

// $j= 1;

// for ($j; $j<= $i; $i= $i-2){

//     echo $i . "<br>";


// }

// do {
//     echo " user attempt" . "<br>";
// $j++;
// }while ($j<=$i);
 

// while($j <=$i){

//     echo "user attempt:" . $j . "<br>";
//     $j ++;

// }


// $fruits = ['mango','apple','kiwi'];

// foreach ( $fruits as $fruitname){

//     echo "Fruits Name :" . $fruitname . "<br>";
// }


for ( $i = 1; $i<= 10 ; $i++){
    echo 'Parent ' . $i . '<br>';

    for ($j=1;$j<=3;$j++){

        echo "Child " . $j . '<br>';
    }
    for ($k=1;$k<=2;$k++){

        echo "Child1 " . $k . '<br>';
    }
}


// echo " 1";
// echo "<br>";
// echo " 2";
// echo "<br>";
// echo " 3";
// echo "<br>";
// echo " 4";
// echo "<br>";
// echo " 5";


 echo "<h1>Loop is finished </h1>";
?>