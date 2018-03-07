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
        <h4>RECEIPT</h4>
              <?php
            // set session variables
            $_SESSION["user_name"] = $_POST["user_name"];
            $_SESSION["user_email"] = $_POST["user_email"];
            ?>
        
        <?php
        // Echo session variables that were set on previous page
        echo "Customer Name: " . $_SESSION["user_name"] . ".";
        ?>
        
        <br/>
        
        <?php
        echo "Customer Email: " . $_SESSION["user_email"] . ".";
        ?>
        
        <br/>
        
        <?php
        echo "Total is $" . $_SESSION["total"] . ".";
        ?>
        
        <br/>
        
     
            
    
        
    </body>
</html>