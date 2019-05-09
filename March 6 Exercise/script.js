/* global variable */
var formValidity = true;

var delivInfo = {};
var delivSummary = document.getElementById("deliverTo");
var ordrInfo = {};
var ordrSummary = document.getElementById("order");

function previewOrder() {
   processDeliveryInfo();
   document.getElementsByTagName("section")[0].style.display = "block";
}

function processDeliveryInfo() {
   var prop;
   delivInfo.name = document.getElementById("nameinput").value;
   delivInfo.addr = document.getElementById("addrinput").value;
   delivInfo.city = document.getElementById("cityinput").value;
   delivInfo.email = document.getElementById("emailinput").value;
   delivInfo.phone = document.getElementById("phoneinput").value;
   for (prop in delivInfo) {
      delivSummary.innerHTML += "<p>" + delivInfo[prop] + "</p>";
   }
   document.getElementById("deliverTo").style.display = "block";

    var prop2;
    ordrInfo.radio = document.querySelector('input[name = "crust"]:checked').value;
    ordrInfo.size = document.getElementById("size").value;
    ordrInfo.sum = document.getElementById("instructions").value;

    var all = document.querySelectorAll('input[name = "toppings"]:checked');
    var aIds = [];

    for (var x = 0, l = all.length; x < l; x++) {
        aIds.push(all[x].value);
    }

    var str = aIds.join('<br>');
    
    for (prop2 in ordrInfo) {
        
        ordrSummary.innerHTML = "<p>" + ordrInfo[prop2] + "</p>" +  "<p>" + ordrInfo[prop2] + "</p>" + str;
    }
    document.getElementById("order").style.display = "block";

    
}

/* validate required fields */
function validateRequired() {
    var inputElements = document.querySelectorAll("input[required]");
    var errorDiv = document.getElementById("errorMessage");
    var crustBoxes = document.getElementsByName("crust");
    var fieldsetValidity = true;
    var elementCount = inputElements.length;
    var currentElement;
    try {
        for (var i = 0; i < elementCount; i++) {
            // validate all required input elements in fieldset
            currentElement = inputElements[i];
            if (currentElement.value === "") {
                currentElement.style.background = "red";
                fieldsetValidity = false;
            } else {
                currentElement.style.background = "white";
            }
        }
        currentElement = document.querySelectorAll("select")[0];
        // validate state select element
        if (currentElement.selectedIndex === -1) {
            currentElement.style.border = "1px solid red";
            fieldsetValidity = false;
        } else {
            currentElement.style.border = "";
        }

        if (!crustBoxes[0].checked && !crustBoxes[1].checked) {
            // verify that a crust is selected
            crustBoxes[0].style.outline = "1px solid red";
            crustBoxes[1].style.outline = "1px solid red";
            fieldsetValidity = false;
        } else {
            crustBoxes[0].style.outline = "";
            crustBoxes[1].style.outline = "";
        }

        if (fieldsetValidity === false) {
            throw "Please complete all required fields.";
        } else {
            errorDiv.style.display = "none";
            errorDiv.innerHTML = "";
        }
    }
    catch (msg) {
        errorDiv.style.display = "block";
        errorDiv.innerHTML = msg;
        formValidity = false;
    }
}

/* validate form */
function validateForm(evt) {
    if (evt.preventDefault) {
        evt.preventDefault(); // prevent form from submitting
    } else {
        evt.returnValue = false; // prevent form from submitting in IE8
    }
    formValidity = true; // reset value for revalidation
    validateRequired();
    if (formValidity === true) {
        document.getElementById("errorMessage").innerHTML = "";
        document.getElementById("errorMessage").style.display = "none";
        document.getElementsByTagName("form")[0].submit();
    } else {
        document.getElementById("errorMessage").innerHTML = "Please complete the highlighted fields.";
        document.getElementById("errorMessage").style.display = "block";
        scroll(0, 0);
    }
}


/* create event listeners  */
function createEventListeners() {
    var orderForm = document.getElementsByTagName("form")[0];
    if (orderForm.addEventListener) {
        orderForm.addEventListener("submit", validateForm, false);
    } else if (orderForm.attachEvent) {
        orderForm.attachEvent("onsubmit", validateForm);
    }
}

/* create event listener  */
function createEventListener() {
   var previewBtn = document.getElementById("previewBtn");
   if (previewBtn.addEventListener) {
      previewBtn.addEventListener("click", previewOrder, false);
   } else if (previewBtn.attachEvent) {
      previewBtn.attachEvent("onclick", previewOrder);
   }
}

/* create event listener when page finishes loading */
if (window.addEventListener) {
   window.addEventListener("load", createEventListener, false);
} else if (window.attachEvent) {
   window.attachEvent("onload", createEventListener);
}