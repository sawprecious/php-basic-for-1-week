<?php
    /* function myFunc() {
       static $var = 0;
        $var++;
        echo $var;
    }
    myfunc();
    myfunc();
    myfunc();
    myfunc();

   // $a = 20;
   // $b = $a;

   // $a = 40; // but if you put & to any variable in will effect to every variable.

   // example
   $a = 30;
   $b = &$a;
   $b = 180;
    echo " variable A is now =>" . $a;
    echo "<br>";
    echo " variable B is now =>" . $b; */

    $a = 30;
    function myName(&$a){ // it effective to all because of ( & )
        $a = 40;
        echo $a;
    }
    myName($a);
    echo "<br>";
    echo $a;
?>

