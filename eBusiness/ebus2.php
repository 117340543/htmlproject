<?php

// Start the session

session_start();
?>
<!DOCTYPE html>
<html>
    <head>
                <!--Tells browser what character set is being used-->
         <meta charset="utf-8" />
         
         <!--Title is given to webpage-->
        <title>Enter Details</title>
        
        <!--Linking relevant stylesheet-->
         <link rel ="stylesheet" href="../mystylesheet.css" type="text/css">
         
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </head>
    <body> 
    
        <!--This an ordered list created to act as a navigation bar-->
        <ul class="navigation">
<li><a href="../CV/cv_page1.html">Curriculum Vitae</a></li>
<li><a href="../Interests/Sports.html">Interests</a></li>
<li><a href="../eBusiness/ebus1.php" >Ebus</a></li>
<li><a href="https://github.com/117340543/htmlproject">Github</a></li>
</ul>

<!--This is a div tag to style heading, done using css-->
<h1 class="mainheading">The Cloud Shop</h1>
            
            <br/>
            
            <!--This div styles the main content on the page, it used css connected to a stylesheet-->
            <div id="ebuss">
                
        <h4>Please enter your payment details</h4>
        
         <!--This uses php to move values onto other forms-->
            <form action="ebus3.php" method="POST">
                
                    <label for="user_pin">PIN: 
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    </label>
                    
                    <br>
                    
                    <label for="user_name">Name: 
                    <input type="text" id="user_name" name="user_name" placeholder="Card Name" maxlenght="16">
                    </label>
                    
                    <br>
                    
                    <label for="user_email">Email: 
                        <input type="email" id="user_email" name="user_email" placeholder="Card Email" maxlenght="254">
                    </label>
                    
                    <br>
                    
                    <!--This button is used to submit the radio button chosen-->
                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
            
            </form>
            
            <br/>

            <button onClick="validateDetails()">Validate</button>
            
            <!--This keeps the total value to be pushed onto EBUS3-->
            <?php
            // Set session variables
            $_SESSION["total"] = $_POST["total"];

            
            ?>
       </div>
       
        <!--This a footer tag, created by a div,styled by css-->
       <div id="footer"></div>
    </body>

</html>


