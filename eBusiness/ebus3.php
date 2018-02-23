<?php
session_start();
?>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        <h4>RECEIPT</h4>
        
        <?php
        // Echo session vairables that were set on previous page
        echo "Total is: " . $_SESSION["total"] . ".";
        ?>
    </body>
</html>