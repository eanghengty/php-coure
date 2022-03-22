<?php
//filter out the even number from the array
$arr = [2,3,4,6,7,9,11,20];
$filter_out_even_number =fn($idx)=> ($idx % 2 !==0 ? true : false);


print_r(array_filter($arr,$filter_out_even_number));





?>