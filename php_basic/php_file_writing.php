<?php
    $file="File Writing.txt";
    $h = fopen($file,'w');
    fwrite($h, " Today is fourth days of php basic."); // note : if you rewrite new it will enter a new data.
    fclose($h);
?>