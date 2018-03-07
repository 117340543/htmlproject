
/* global $ */


function calcSub(){
    //Here is a function utilising If statements to show the price for each different product
    var argSubTotal;
    
    if(document.getElementById('salesforce').checked) {
      argSubTotal = 100;
    }
    else if(document.getElementById('gmail').checked) {
      argSubTotal = 400;
    }
    else if(document.getElementById('cloud9').checked) {
      argSubTotal = 200;
    }
    else {
      argSubTotal = 300;
    }
    
    CalDisVatTotal(argSubTotal);
    
}//here is a function to calculate total cost including discount and tax
function CalDisVatTotal(ParmSubTotal){
  var Subtotal = ParmSubTotal;
  var discountAmt;
  var VatAmt;
  var totalPrice;
  
  discountAmt = (ParmSubTotal * 0.05);
  VatAmt = ((ParmSubTotal - discountAmt) * 0.1);
  totalPrice = ((ParmSubTotal + VatAmt) - discountAmt);
  display(ParmSubTotal, discountAmt, VatAmt, totalPrice);
}

//this function displays the values for the discount, vat, subtotal and total
function display(parm1, parm2, parm3, parm4){
  
  document.getElementById("subtotal").value = parm1;
  document.getElementById("Discount").value = parm2;
  document.getElementById("VAT").value = parm3;
  document.getElementById("total").value = parm4;
   
  enablebtnProceed();
}

//this enables the user to proceed to the next ebus page, It will be set to true function display if the requirements are met
function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}




  
  
  
  
  






