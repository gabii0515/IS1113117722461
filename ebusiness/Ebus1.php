<!DOCTYPE html>
<html>
    <head>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css"/>
        
    </head>
    
    <body>
        <!--The Ebus navigation bar-->
        <center>
        <div class="navbar">
            <nav>
                <ul>
                    <li><a href="../ebusiness/Ebus1.php">Ebus</a></li>
                    <li><a href="../about.html">About</a></li>
                    <li><a href="../homepage.html">Home</a></li> 
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
            
        <h4>Select a Product</h4>
        
        <br/>
        
        <!--The radio buttons-->
        <form method= "POST" action="Ebus2.php">
            
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
            </label>
            
            <br/>
            
            <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
            </label>
           
            <br/>
            
            <label for="gmail">
                <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ $400
            </label>
            
            <br/>
            
            <label for="cloud9">
                <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                Cloud9 @ $300
            </label>
            
            <br/>
            <br/>
            
            <!--The output boxes-->
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="discount">
                Discount @ 5%
                <input type="text" id="discount" name="discount" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="vat">
                Vat @ 10%
                <input type="text" id="vat" name="vat" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <!--The add to shopping cart button-->
            <button type="submit" id="btnproceed" class="addcart" disabled>add to shopping cart</button>
            
        </form>
            
            <!--The Calculate and Clear buttons-->
            <br/>
            <button onClick="calcSub()">Calculate Cost</button>
            <button onClick="Ebus1.php">Clear Choice</a>
           
        </section>
        
        <!--The footer and copyright-->
        <footer>
            <p> &copy; Gabriele Gudauskyte</p>
            <p>Contact information: <a href="mailto:">g******0515@umail.ucc.ie</a>.</p>
        </footer>
    </body>
</html>

