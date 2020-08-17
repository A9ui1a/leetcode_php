<?php
includeLibAlgorithms('PowerOfFour');




//載入演算法題目
function includeLibAlgorithms($cname=''){
    $path= __DIR__ . '/algorithms/' .$cname.'.php';
    require $path;
}
?>