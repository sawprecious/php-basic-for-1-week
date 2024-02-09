<?php
if (isset($_POST['submit'])){
    $colors= $_POST['color'];
        foreach ($colors as $color){
            echo $color . "<br>";
    }

}

?>

<form action="<?php $_PHP_SELF ?>" method="post">
    <input type="checkbox"  name="color[]" value="red"> RED <br><br>
    <input type="checkbox" name="color[]" value="blue"> BLUE <br><br>
    <input type="checkbox"  name="color[]" value="green"> GREEN <br><br>
    <input type="checkbox" name="color[]" value="yellow"> YELLOW <br><br>
    <input type="submit"  name="submit" value="choose">
</form>