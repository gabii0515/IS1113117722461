<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </head>
    <body>
        <h4>Please enter your payment details</h4>
                
            <label for="name">Name</label>
                
            <input type="text" id="name"  placeholder="Enter full name here" maxlength="10">
            
            <br/>
            <br/>
            
            <label for="Email">Email</label>
            
            <input type="text" id="email" placeholder="Your email here" maxlength="20">
            
            <br/>
            
        
            <form action="Ebus3.php" method="POST">
            
                <label for="user_pin">PINK</label>
                
                <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                
                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
                
            </form>
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
            
            <?php
            //Set session variables
            $_SESSION["total"] = $_POST["total"];
            ?>

                 
    </body>
</html>