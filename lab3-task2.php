<?php
//filter out the even number from the array
$arr = [2,3,4,6,7,9,11,20];
$filter_out_even_number = array_map(fn($idx)=> $idx %2 !== 0 ? $arr2= $idx:null ,$arr);

print_r($filter_out_even_number);





?>