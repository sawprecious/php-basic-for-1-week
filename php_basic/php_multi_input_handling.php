<?php
    if(isset($_POST['submit'])){
        $uname = $_POST['username'];
        $mail = $_POST['email'];
        $pass = $_POST['password'];
        
        echo $uname . "=" . $mail . "=" . $pass ;
        $gender = $_POST['gender'];
        echo $gender . "<br>";

        $sub = $_POST['subject'];
        foreach($sub as $subjects){
            echo $subjects . "<br>";
        }

        foreach($_FILES['files']['tmp_name'] as $key => $val){
            move_uploaded_file($_FILES['files']['tmp_name'][$key], "upload/" . $_FILES['files']['name'][$key]);
        }

    }

?>

<form action="<?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
    <input type="text" name="username" placeholder="Username"> <br><br>
    <input type="email" name="email" placeholder="Email"> <br><br>
    <input type="password" name="password"> <br><br>
    <h2> Choose Gender </h2>
    <input type="radio" name="gender" value="Male"> : Male
    <input type="radio" name="gender" value="Female"> : Female
    <h2> Choose Subject </h2>
    <input type="checkbox" name="subject[]" value="English"> : English
    <input type="checkbox" name="subject[]" value="Physics"> : Physics
    <input type="checkbox" name="subject[]" value="Chemistry"> : Chemistry
    <input type="checkbox" name="subject[]" value="Biology"> : Biology <br><br>
    <input type="file" name="files[]" multiple> <br><br>
    <button type="submit" name="submit">Choose</button>
</form>