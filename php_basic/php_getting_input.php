<?php

    if(isset($_GET['submit'])){
        $name=$_GET['username'];
        $pass=$_GET['password'];
        echo "your username is =>" . $name . " and your password is =>" . $pass;
    }
?>
    
    <form action ="<?php $_PHP_SELF ?>" method = "get">
        <h1> To become a <b>Member</b> </h1>
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <button type="submit" name="submit">Register</button>
    </form>