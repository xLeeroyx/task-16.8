<?php

$a = readline();
$n = readline();

function power($a, $n){
    if($n == 0){
        return 1;
    }else{
        return $a * power($a, $n - 1);
    }

}
   echo power($a, $n);
?>