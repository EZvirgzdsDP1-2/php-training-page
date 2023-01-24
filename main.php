<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main page</title>
</head>
<body>
<?php
        if(array_key_exists('button1', $_POST)) {
            button1();
        }
        else if(array_key_exists('button2', $_POST)) {
            button2();
            // header('Location views/about.php');
            // die();
        }
        function button1() {
            echo "This is Button1 that is selected";
        }
        function button2() {
            echo "This is Button2 that is selected";
        }
    ?>

    <form method='post'>
        <input type='submit' name='button1' value='Click me bitch'></input>
        <input type='submit' name='button2' value='Click me hoe'></input>

    </form>

    <img src='1.jpg' alt=''>
</body>
</html>