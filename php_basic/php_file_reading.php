<?php
    $file= "PHP_Basi.txt"; // first you have to choose file path
    $handler = fopen($file, 'r'); // second you have to open file (in this case, there are two parameter (firs- file path ,second mod))
    $size = filesize($file); // third - you have to choose file size
    $data = fread ($handler, $size); // to read a file you have to input (second and third) variable
    echo $data;
?>