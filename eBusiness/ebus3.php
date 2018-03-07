<?php
session_start();
?>
<html>
    <head>
                <!--Tells browser what character set is being used-->
         <meta charset="utf-8" />
         
         <!--Title is given to webpage-->
        <title>RECEIPT</title>
        
       <!--Linking relevant stylesheet-->
         <link rel ="stylesheet" href="../mystylesheet.css" type="text/css">
 
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
                
       <h4>RECEIPT</h4>
       
       <!--This brings the user name and email from ebus 2 to here ebus 3-->
              <?php
            // set session variables
            $_SESSION["user_name"] = $_POST["user_name"];
            $_SESSION["user_email"] = $_POST["user_email"];
            ?>
        
        <!--Here the total, user name and email variables are called-->
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
        
      <!--This a footer tag, created by a div,styled by css-->
            <div id="footer"></div>
            
    </body>
</html>