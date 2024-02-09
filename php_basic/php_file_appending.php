<?php
    $file = "File Writing.txt";
    $h = fopen($file , 'a');
    fwrite($h, "This is the new one.");
    fclose($h);
?>