/* global $ */

function validateDetails(){
    
    var pin;
    var name;
    var email;
    
    pin = document.getElementById("user_pin").value;
    name = document.getElementById("user_name").value;
    email = document.getElementById("user_email").value;
    
    if (pin == ""){
        alert("Please enter your PIN");
    }
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }
     else if (String(name).length < 3){
        alert("Please make sure your name is accurate");
    }
else if (name == ""){
    alert("Please enter a name");
}
else if (email == ""){
    alert("Please enter a valid email")
}
else{
        enablebtnPurchase();
    }
    
}
function enablebtnPurchase(){

    $('#btnPurchase').prop('disabled', false);
}
function disablebtnPurchase() {

   $('#btnPurchase').prop('disabled', true);
}
