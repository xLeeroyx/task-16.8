<?php

$n = readline();

function fib($n){
    if($n <= 0){
        return 0;
    }elseif($n <= 2){
        return 1;
    }else{
        return fib($n - 1) + fib($n - 2);
    }
}

echo fib($n);

?>  