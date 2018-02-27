
/* global $ */

function calcSub(){
    
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
    
    CalculateRealTotal(argSubTotal);
}
function CalculateRealTotal(SubTotal){
  var subtotal = SubTotal;
  var discount;
  var VAT;
  var total;
  
  discount = (SubTotal * 0.05);
  VAT = ((SubTotal - discount) * .1);
  total = ((SubTotal + VAT) - discount);
  display(discount, VAT, SubTotal, total);
}


function display(Sub, Tot, Vat, Dis){
  
  document.getElementById("SubTotal").value = Sub;
  document.getElementById("total").value = Tot;
  document.getElementById("discount").value = Dis;
  document.getElementById("VAT").value = Vat;
   
  enablebtnProceed();
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}




  
  
  
  
  






