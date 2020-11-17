<?php

$a = readline();
$b = readline();

for ($n = $a; $n <= $b; $n++) {
    if(is_int($n/2)){
        echo $n.' ';
    }
}

?>