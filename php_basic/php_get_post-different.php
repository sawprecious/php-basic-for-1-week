<?php
    if(isset($_GET['submit'])){
        echo "username is correct";
    }
?>
    <form action ="" method = "post">  // encrypt data 
        <input type="text" name="username">
        <button type="submit" name="submit">Register</button>
    </form>

    <form action ="<?php $_PHP_SELF ?>" method = "get"> //show data
        <input type="text" name="username">
        <button type="submit" name="submit">Register</button>
    </form>
