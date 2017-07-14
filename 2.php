<?php
function numbers_multiple_of_three_my()
{
    $u = 0;
    $count = 0;
    for ($i = 1000; $i >= 22; $i--) {
        //if($i%3==0){мой вариант
        //if(is_int($i/3){ // это целое
        if (!($i % 3)) { //нет остатка от деления
            echo $i . " ";
            $u++;
            $count++;
            if ($u == 15) {
                echo "\n";
                $u = 0;
            }
        }

    }
    echo "\n";
    echo "Количество чисел, кратных трем, в диапазоне от 22 до 1000 - " . $count . "\n";
    var_dump($count);
    echo "\$u = " . $u . "\n";
    echo "\$i = " . $i . "\n";
}
function numbers_multiple_of_three()
{
    for ($i = 999; $i >= 22; $i -= 3) {
        echo $i . " ";
    }
}
function odd_numbers()/*нечетные числа*/{
    for($i=1; $i<=100; $i+=2){
        echo $i." ";
    }
}
function increment(){
    $i=10;
    $i+=++$i+$i++;
    echo $i."\n";

//$i = $i + ($i = $i + 1) + (-1 + $i = $i + 1);
//$b = $i + ($i = $i + 1) + (($i = $i + 1) - 1); Почему выводит 33?

//$i = $i + ((($i = $i + 1) + $i)+1);
//$b = (($i = $i + 1) -1 );
    //echo $b,$i."\n";
}

//10.07.2017--------------------------------------------------
/*$double=function ($a){
    return $a*2;
};
echo $double(6);*/
//end 10.07.2017----------------------------------------------

//Вызов функций ----------------------------------------------
numbers_multiple_of_three_my();
//numbers_multiple_of_three();
//increment();



