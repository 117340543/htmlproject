<?php

// Start the session

session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
         <link rel ="stylesheet" href="../mystylesheet.css" type="text/css">
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </head>
    <body> 
        
        <ul class="navigation">
<li><a href="../CV/cv_page1.html">Curriculum Vitae</a></li>
<li><a href="../Interests/Sports.html">Interests</a></li>
<li><a href="../eBusiness/ebus1.php" >Ebus</a></li>
<li><a href="https://github.com/117340543/htmlproject">Github</a></li>

</ul>
<h1 class="mainheading">The Cloud Shop</h1>

          
            
            <br/>
            <div id="ebuss">
        <h4>Please enter your payment details</h4>
        
        
            <form action="ebus3.php" method="POST">
                    <label for="user_pin">PIN: 
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    </label>
                    <br>
                    <label for="user_name">Name: 
                    <input type="text" id="user_name" placeholder="Card Name" maxlenght="16">
                    </label>
                    <br>
                    <label for="user_email">Email: 
                        <input type="email" id="user_email" placeholder="Card Email" maxlenght="254">
                    </label>
                    <br>
                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
            
            </form>
            
            <br/>

            <button onClick="validateDetails()">Validate</button>
            
            <?php
            // Set session variables
            $_SESSION["total"] = $_POST["total"];
             $_SESSION["user_name"] = $_POST["user_name"];
            
            ?>
       </div>
    </body>

</html>


