<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        <link rel ="stylesheet" href="mystylesheet.css" type="text/css">
    </head>
    
    <body
                <ul class="navigation">
<li><a href="../CV/cv_page1.html">Curriculum Vitae</a></li>
<li><a href="../Interests/Sports.html">Interests</a></li>
<li><a href="../eBusiness/ebusshop.html" >Ebus</a></li>
<li><a href="../https://github.com/117340543/htmlproject">Github</a></li>

</ul>
        
            <h4>Select a Product</h4>
            
            <br/>
            
            <form method="POST" action="ebus2.php">
              
              <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
              </label>
              
              <br/>
              
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                Amazon Web Service @ $300
              </label>
              
              <br/>

              
              <label for="gmail">
                <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ $300
              </label>
              
              <br/>
              
              
              <label for="cloud9">
                <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                Cloud 9 @ $300
              </label>
              
              <br/>
              <br/>
              
              <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="total">
                Total
                <input type="text" id="total"  name="total" value="0.00" readonly/>
              </label>
    
              <br/>
              
              <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            <button onClick="calcSub()">Calculate Cost</button>
            <a role="button" href="Ebus1.php">Clear Choice</a>
            
    
    </body>
</html>