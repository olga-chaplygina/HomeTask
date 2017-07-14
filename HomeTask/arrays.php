<?php
/*6.Отсортировать одномерный массив из десяти элементов по возрастанию.
Элементы массива - целое случайное число от 1 до 1000.*/
function array_sort ()
{
    /* Объявляем массив: */
    $array = array();

    /*Заполняем массив случайными числами: */
    for ($k = 0; $k < 10; $k++):
        $array[$k] = rand(0, 1000);
    endfor;
    asort($array);
    /* Выводим содержимое массива: */
    print_r($array);
//var_dump($array);

}
/*сгенерировать массив чисел 10х10 со случайными значениями от 0 до 1000
удалить из массива все четные элементы*/
function array10x10_1(){
    for ($i = 0; $i < 10; $i++){
        for ($j = 0; $j < 10; $j++){
            $a[$i][$j] = rand(0, 1000);
            echo $a[$i][$j]." ";
        }
        echo "\n";
    }
    echo "\n";
    for ($i = 0; $i < 10; $i++){
        for ($j = 0; $j < 10; $j++){
            $a[$i][$j] = rand(0, 1000);
            if($a[$i][$j]%2){//вывод нечетных, а нужно удалить четные из массива, дошло когда увидела решение в скайпе.
                if(10<=($a[$i][$j]) and ($a[$i][$j])<100){
                    echo $a[$i][$j],'  ';
                }elseif($a[$i][$j]<10) {
                    echo $a[$i][$j]."   ";
                }else {
                    echo $a[$i][$j]." ";
                }
            }
        }
        echo "\n";
    }
    echo "\n";

}
function array10x10_2(){
//    $arr = array();//зачем объявлять массив?
    $arrSize = 10;
    $arrMinValue = 1;
    $arrMaxValue = 1000;
    for($i=0; $i<$arrSize; $i++){
//        $arr[$i] = array(); //зачем объявлять массив?
        for ($j=0; $j<$arrSize; $j++){
            $a[$i][$j]=mt_rand($arrMinValue, $arrMaxValue);
            echo $a[$i][$j],' ';
//            var_dump($arr);
        }
        echo "\n";
    }
    echo "\n";
    for($i=0; $i<$arrSize; $i++){
        for ($j=0; $j<$arrSize; $j++){
            $a[$i][$j]=mt_rand($arrMinValue, $arrMaxValue);
            if(!($a[$i][$j]%2)){
                unset ($a[$i][$j]);
            }
            echo $a[$i][$j],' ';
        }
        echo "\n";
    }
}
/*сгенерировать массив чисел 10х10 со случайными значениями от 0 до 1000
все элементы главной диагонали увеличить на значения напротив лежащих элементов второстепенной диагонали.
например
1 2 3 5
8 9 4 6
8 5 2 3
1 4 7 8
результат
6 2  3 5
8 13 4 6
8 5  7 3
1 4  7 9
*/
function array10x10_3 (){
//    $arr = array();
    $arrSize = 10;
    $arrMinValue = 0;
    $arrMaxValue = 1000;
    for ($i=0; $i<$arrSize; $i++){

        for($j=0; $j<$arrSize; $j++){
            $a[$i][$j] = mt_rand($arrMinValue, $arrMaxValue);
            echo $a[$i][$j]." ";
        }
        echo "\n";
    }


}


/*Вася и Петя учатся в школе в одном классе. Недавно Петя поведал Васе о хитром способе возведения в квадрат натуральных чисел,
оканчивающихся на цифру 5. Теперь Вася может с легкостью возводить в квадрат двузначные (и даже некоторые трехзначные) числа,
оканчивающиеся на 5. Способ заключается в следующем: для возведения в квадрат числа, оканчивающегося на 5 достаточно умножить число,
полученное из исходного вычеркиванием последней пятерки на следующее по порядку число, затем остается лишь приписать «25» к
получившемуся результату справа. Например, для того, чтобы возвести число 125 в квадрат достаточно 12 умножить на 13 и приписать 25,
т.е. приписывая к числу 12*13=156 число 25, получаем результат 15625, т.е. 1252=15625.
Напишите программу, возводящую число, оканчивающееся на 5, в квадрат для того, чтобы Вася смог проверить свои навыки.
реализовать петин и васин алгоритм.*/

function squaring($a)/*возведение числа в квадрат*/{
    if (!($a%5)){
        $a = array();
    }
}

//array10x10_1();
//array10x10_2();
array10x10_3();