<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>

    </head>
    
    <body>
        
        <!--The Ebus navigation bar-->
        <center>
        <div class="navbar">
            <nav>
                <ul>
                    <li><a href="../homepage.html">Home</a></li>
                    <li><a href="../about.html">About</a></li>
                    <li><a href="../ebusiness/Ebus1.php">Ebus</a></li>
                </ul>
            </nav>
            </div>
        </center>
        
        <!--first image and the text on it-->
        <div class="pimg1">
            <div class="ptext">
                <span class="border">
                    Ebus
                </span>
            </div>
        </div>
        
        <!--The light section-->
        <section class="section section-light">
        
        <h4>Please enter your payment details</h4>
        
        <!--The textboxes with description in them-->
        <form action="Ebus3.php" method="POST">
                
            <label for="name"></label>
            <input type="text" id="name" name="name"  placeholder="Enter full name here" maxlength="10">
            
            <br/>
            
            <label for="Email"></label>
            <input type="text" id="email" name="email" placeholder="Your email here" maxlength="20">
            
            <br/>
            
            <label for="user_pin"></label>
            <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
            
            <br/>
                
            <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
                
        </form>
            
            <!--Validate button-->
            <button onClick="validateDetails()">Validate</button>
            
        </section>
            
        <?php
        /* Set session variables */
        $_SESSION["total"] = $_POST["total"];
        ?>
            
            
        <!--The footer and copyright-->
        <footer>
            <p> &copy; Gabriele Gudauskyte</p>
            <p>Contact information: <a href="mailto:">g******0515@umail.ucc.ie</a>.</p>
        </footer>
    </body>
</html>