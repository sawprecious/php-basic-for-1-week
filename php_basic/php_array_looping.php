<?php
    $name = array(
        array( "A","B","C","D","E","F"),
        array("one","two","three","four"),
        array("first","second","third")
    );

    for($i = 0; $i < count($name);$i++){
        for($j = 0; $j <count($name[$i]); $j++){
        echo $name [$i][$j] . "<br>";
        }
        echo "<hr>";
    }
