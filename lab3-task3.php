<?php

$sum_all_input_params = function(...$num){
    $result=0;
    foreach($num as $n){
        $result = $result + $n;
    }
    return $result;
};

echo $sum_all_input_params(10,10,20);


?>