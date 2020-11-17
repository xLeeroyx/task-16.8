<?php

$year = readline();

$result = is_int($year/400) || (is_int($year/4) && !is_int($year/100)) ? 'YES' : 'NO';

echo $result;

?>