<?php
    /*
    $name = array(); //dynamically array 
    
    $name [0] = "A";
    $name [2] = "B";
    $name [3] = "C";
    $name [4] = "D";
    echo $name[3];
    echo count($name); */

    /*
    $name = array("A", "B", "C", "D"); //initalize array
    echo $name[0]; */

    # Associated Array

    /*
    $name = array();

    $name["A"] = "One";
    $name["B"] = "Two";
    $name["C"] = "Three";
    $name["D"] = "Four";
    echo $name["C"] ; */

    /*
    $name = array("A"=>"One","B"=>"Two","C"=>"Three");
    echo $name["C"]; */

    # MultiDimenional Array

    $name = array(
        array("A","B","C","D"),
        array("one","two","three"),
        array("first","second")
    );
    echo $name[0][2]; // fist=row, second=column

?>