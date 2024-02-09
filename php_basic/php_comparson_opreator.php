<?php
    // == != < > >= <= ===
    $num_1 = 30;
    $num_2 = 40;

    // $bol = $num_1 == $num_2; 
    // $bol = $num_1 != $num_2;
    // $bol = $num_1 < $num_2;
    // $bol = $num_1 > $num_2;
    // $bol = $num_1 >= $num_2;
    // $bol = $num_1 <= $num_2;
     $bol = $num_1 === $num_2;

    if($bol){
        echo "it is true";
    }else{
        echo " it is false";
    }