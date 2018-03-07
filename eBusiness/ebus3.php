<?php
session_start();
?>
<html>
    <head>
        <title>RECEIPT</title>
         <link rel ="stylesheet" href="../mystylesheet.css" type="text/css">
 
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
        <h4 class="receipt">RECEIPT</h4>
              <?php
            // set session variables
            $_SESSION["user_name"] = $_POST["user_name"];
            $_SESSION["user_email"] = $_POST["user_email"];
            ?>
        
        <?php
        // Echo session variables that were set on previous page
        echo "<strong>Customer Name:</strong> " . $_SESSION["user_name"] . ".";
        ?>
        
        <br/>
        
        <?php
        echo "<strong>Customer Email:</strong> " . $_SESSION["user_email"] . ".";
        ?>
        
        <br/>
        
        <?php
        echo "<strong>Total is $</strong>" . $_SESSION["total"] . ".";
        ?>
        
        <br/>
        
     
            <div id="footer"></div>
    
        
    </body>
</html>