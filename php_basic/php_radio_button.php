<?php
    if (isset ($_POST['submit'])){
        $color = $_POST['myRadio'];
        echo "you choossing color is =>" . $color;
    }
?>

<form action="<?php $_PHP_SELF ?>" method="post">
    <input type="radio"  name="myRadio" value="red"> RED <br><br>
    <input type="radio" name="myRadio" value="blue"> BLUE <br><br>
    <input type="radio"  name="myRadio" value="green"> GREEN <br><br>
    <input type="radio" name="myRadio" value="yellow"> YELLOW <br><br>
    <button type="submit"  name="submit">click</button>
</form>