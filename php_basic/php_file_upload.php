<?php
    if(isset($_POST['submit'])){
       //print_r ($_FILES ['file']);
       echo $_FILES['file']['tmp_name'] . "<br>";
       echo $_FILES ['file']['name'] . "<br>";
        echo $_FILES ['file']['size'] . "<br>";
       echo $_FILES ['file']['type'] . "<br>";

       move_uploaded_file($_FILES['file']['tmp_name'], 'upload/' . $_FILES['file']['size']);
    }
    
?>

<form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="submit">UPLOAD</button>
</form>