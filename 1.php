<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 04.07.2017
 * Time: 14:15
 */


/*$people = array(
    array('name' => 'Kalle', 'salt' => 856412),
    array('name' => 'Pierre', 'salt' => 215863)
);

for($i = 0, $size = count($people); $i < $size; ++$i) {
    $people[$i]['salt'] = mt_rand(000000, 999999);
}
foreach ($people as $v1){
    foreach ($v1 as $key => $v2){
        echo "$key = $v2\n";
    }
}

$a = array(
    "one"=>1,
    "two"=>2,
    "three"=>3,
    "seventeen"=>17
);
foreach ($a as $k => $v){
    //echo "\$a[$k] => $v.\n";
    echo $k." => $v\n";
}
//var_dump($people);
//var_dump($a);
echo mt_rand();*/

for ($col = 'A'; $col != 'AA'; $col++){
    echo $col . ' ';
}
/*function printAlphabet($from = 192, $to = 223) {
    $tmp = '';
    $range = range($from, $to);
    foreach($range as $letter) {
        $tmp .= ' '.chr($letter);
    }
    return $tmp;
}
echo printAlphabet();*/
$abc = array();
foreach (range(chr(0xC0), chr(0xDF)) as $b)
    //$abc[] = iconv('CP1251', 'UTF-8', $b);
    $abc[] = $b;
print_r($abc);