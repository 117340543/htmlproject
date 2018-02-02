/* global $ */

function calcsub(){
    
    var argsubtotal;
    
    if(document.getelementbyId('salesforce').checked){
        argsubtotal = 100;
    }
    else {
        argsubtotal = 300;
    }
    display(argsubtotal);
}
function display(parm1){
    
    document.getelementbyId("subtotal").value = parm1;
    document.getelementbyId("total").value = parm1;
    
    enablebtnProceed();
}
function enablebtnProceed(){
    $('btnProceed').prop('disabled', true);
    
}
function disablebtnProceed(){
    $('btnProceed').prop('disabled', false);
    
}