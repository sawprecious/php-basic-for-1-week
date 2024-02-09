<?php
    // if we type normal you have to type like that

    echo " <h1> PHP </h1>";
    echo "<p> now we've learn PHP basic. </p>";
    echo " <p> and this course will take 2 months. </p>";
    echo "<b> students must learn <br> </b>";
    echo "<b><i> thanks </i> </b>";

    // but if we type with here document

    $php =<<<start
        <h1> PHP </h1>
        <p> now we've learn PHP basic. </p>
        <p> and this course will take 2 months. </p>
        <b> students must learn <br> </b>
        <b><i> thanks </i> </b>
    start;
    
    echo $php;
?>