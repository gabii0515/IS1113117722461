/* global $ */

function validateDetails(){
    
    var pin, name, email;
    
    name = document.getElementById("name").value;
    
    pin = document.getElementById("user_pin").value;
    
    email = document.getElementById("email").value;
    
    if (pin == ""  || name == "" || email == ""){
        alert("Please enter full details");
    }
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }
    else{
        enablebtnPurchase();
    }
}

    function enablebtnPurchase(){
        $('#btnPurchase').prop('disabled', false);
    }
    
    function disablebtnPurchase(){
        $('#btnPurchase').prop('disabled', true);
    }