
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
function CalculateRealTotal(SubTotall){
  var SubTotal = SubTotall
  var discount;
  var VAT;
  var total;
  
  discount = (SubTotal * 0.05);
  VAT = ((SubTotal - discount) * 0.1);
  total = ((SubTotal + VAT) - discount);
  display(SubTotal, discount, VAT, total);
}


function display(Sub, Dis, Vat, Tot){
  
  document.getElementById("subtotal").value = Sub;
  document.getElementById("Discount").value = Dis;
  document.getElementById("VAT").value = Vat;
  document.getElementById("total").value = Tot;
   
  enablebtnProceed();
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}




  
  
  
  
  






