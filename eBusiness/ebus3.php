<?php
session_start();
?>
<html>
    <head>
        <title>RECEIPT</title>
         <link rel ="stylesheet" href="../mystylesheet.css" type="text/css">
         <script type="text/javascript" src="ebus3_validator.js"></script>
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
        <form action="ebus3.php" method="POST">
        <?php
        // Echo session vairables that were set on previous page
        echo "Total is: $" . $_SESSION["total"] . ".";
 echo "Name is:" . $_SESSION["user_name"];
 
        ?>
     
            
    
        
    </body>
</html>