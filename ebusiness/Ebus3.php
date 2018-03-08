<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        
        <!-- link the ebus page to mystylesheets.css-->
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
    
    </head>
    <body>
        
        <!--Ebus Navigation bar-->
        <center>
        <div class="navbar">
            <nav>
                <ul>
                    <li><a href="../homepage.html">Home</a></li>
                    <li><a href="../about.html">About</a></li>
                    <li><a href="../ebusiness/Ebus1.php">Ebus</a></li>
                </ul>
            </nav>
            
        <!--first image and the text on it-->       
        </div>
        </center>
        
        <div class="pimg1">
            <div class="ptext">
                <span class="border">
                    Ebus
                </span>
            </div>
        </div>
        
        <!--The light section-->
        <section class="section section-light">
        
        <h4>RECEIPT</h4>
        
        <?php
        /* Echo session variables that were set on previous page */
        echo "Name: " . $_POST["name"] . "<br>";
        echo "Email: " . $_POST["email"] . "<br>";
        echo "Total is: &euro;" . $_SESSION["total"] . "<br>";
        ?>
        
        </section>
        
        <!--The footer and copyright-->
        <footer>
          <p> &copy; Gabriele Gudauskyte</p>
          <p>Contact information: <a href="mailto:">g******0515@umail.ucc.ie</a>.</p>
        </footer>
    </body>
</html>