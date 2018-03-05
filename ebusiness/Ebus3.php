<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        <h4>RECEIPT</h4>
        
        <?php
        //Echo session variables that were set on previous page
        echo "Name: " . $_POST["name"] . "<br>";
        echo "Email: " . $_POST["email"] . "<br>";
        echo "Total is: &euro;" . $_SESSION["total"] . "<br>";
        ?>
    </body>
</html>