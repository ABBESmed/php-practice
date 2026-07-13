<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./index.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">
        Pizza <br>
        <input type="checkbox" name="burger" value="Burger">
        Burger <br>
        <input type="checkbox" name="hotdog" value="Hotdog">
        Hotdog <br>
        <input type="checkbox" name="taco" value="Taco">
        Taco <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
// PHP checkboxes explained
    if(isset($_POST["submit"])){
        if(isset($_POST["pizza"])){
            echo "u like pizza! <br>";
        }
        if(isset($_POST["burger"])){
            echo "u like burger! <br>";
        }
        if(isset($_POST["hotdog"])){
            echo "u like hotdog! <br>";
        }
        if(isset($_POST["taco"])){
            echo "u like taco! <br>";
        }

        if(empty($_POST["pizza"])){
            echo "u do not like pizza! <br>";
        }
        if(empty($_POST["burger"])){
            echo "u do not like burger! <br>";
        }
        if(empty($_POST["hotdog"])){
            echo "u do not like hotdog! <br>";
        }
        if(empty($_POST["taco"])){
            echo "u do not like taco! <br>";
        }
    }





?>