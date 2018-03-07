
<!DOCTYPE html>
<html>
    <head>
              <!--Tells browser what character set is being used-->
       <meta charset="utf-8" />
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
<!--Linking relevant stylesheet-->
 <link rel="stylesheet" href="../mystylesheet.css" type="text/css">
    </head>
    
    <body>
      <!--This an ordered list created to act as a navigation bar-->
           <ul class="navigation">
<li><a href="../CV/cv_page1.html">Curriculum Vitae</a></li>
<li><a href="../Interests/Sports.html">Interests</a></li>
<li><a href="../eBusiness/ebusshop.html" >Ebus</a></li>
<li><a href="https://github.com/117340543/htmlproject">Github</a></li>

</ul>

<!--This is a div tag to style heading, done using css-->
<h1 class="mainheading">The Cloud Shop</h1>

<!--This div styles the main content on the page, it used css connected to a stylesheet-->
<div id="ebuss">

            <h4>Select a Product</h4>
            
            <br/>
            
            <!--This uses php to move values onto other forms-->
            <form method="POST" action="ebus2.php">
              
              <!--These radio buttons are created, giving each one unique IDs, names and costs-->
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
                Cloud 9 @ $200
              </label>
              
              <br/>
       
              <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
              </label>
              
              <br/>
              <label for="Discount">
                Discount 5%
                <input type="text" id="Discount" name="Discount" value="0.00" readonly/>
              </label>

<br/>

               <label for="VAT">
                  VAT (10%)
               <input type="text" id="VAT" name="VAT" value="0.00" readonly/>
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
            
            <!--This uses the cost_calc.js file to calculate the cost, this implements javascript-->
            <button onClick="calcSub()">Calculate Cost</button>
            
            <a role="button" href="ebus1.php">Clear Choice</a>
            
            </div>
            
             <!--This a footer tag, created by a div,styled by css-->
    <div id="footer"></div>
    </body>
</html>