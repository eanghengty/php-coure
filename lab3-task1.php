<?php
//write a program to reverse the string  from "welcome to" -> "emoclew ot"
$reverse_word_in_sentence = function($input){
    $step=0;

    $word = $input." ";
    for($character = 0 ; $character< strlen($word) ; $character++){
        
        $array_store_input_word[] = substr($word ,$character , 1) ;
        if($array_store_input_word[$step] == " "){
            $temp_join = join($array_store_input_word);
            for($character1 = strlen($temp_join)-1 ; $character1 >= 0 ; $character1--){
                $array_store_reverse_input_word[] = $array_store_input_word[$character1];
                if($character1 == 0){
                    $array_store_reverse_input_word[$character1] = " ";
                    unset($array_store_input_word);
                    $array_store_input_word = array();
                    $step=0;
                }
            }
        }else{
            $step++;
        }
    }   
    
    $result = join($array_store_reverse_input_word);
    return $result;
};

echo $reverse_word_in_sentence("gnae ytgneh");
?>