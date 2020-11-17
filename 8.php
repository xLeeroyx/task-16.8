<?php

$n = readline();

function numberCheck($arg_1){
    for ($i = 2; $i <= sqrt($arg_1); $i++){
        if ($arg_1 % $i == 0)
            return 0;
    }
    return 1;
}

$number = numberCheck($n);

if($number == 1){
    echo 'prime';
}else{
    echo 'composite';
}

?>
