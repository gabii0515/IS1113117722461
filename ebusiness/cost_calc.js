/* global $ */

/*Functions for the calculations of Ebus */
function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById('salesforce').checked) {
        argSubTotal = 100;
        
    }
    else if (document.getElementById('aws').checked) {
        argSubTotal = 300;
    }
    else if (document.getElementById('cloud9').checked) {
        argSubTotal = 200;
    }
    else {
        argSubTotal = 400;
        
    }

    calcDisVatTotal(argSubTotal);

    }
    
function calcDisVatTotal(parmSubTotal) {
    
    var discountAmt = parmSubTotal * 0.05;
    var tempPrice = parmSubTotal - discountAmt;
    var vatAmt = tempPrice * 0.10;
    var totalPrice = tempPrice + vatAmt;
    
    display(parmSubTotal, discountAmt, vatAmt, totalPrice);
    
    }
    
/* Function for the display*/
function display(parm1, parm2, parm3, parm4){
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("discount").value = parm2;
    document.getElementById("vat").value = parm3;
    document.getElementById("total").value = parm4;
    
    enablebtnProceed();
    }

/* Function for Proceed button */
function enablebtnProceed(){
    $('#btnproceed').prop('disabled', false);
    }


function disablebtnProceed() {
    $('#btnproceed').prop('disabled', true);
    }