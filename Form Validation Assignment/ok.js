
window.onload = function (e)
{
    var mainForm = document.getElementById("mainForm");

    var requiredInputs = document.querySelectorAll(".required");//select all required fields, create array
   
    for (var i = 0; i < requiredInputs.length; i++)
    {
        requiredInputs[i].onfocus = function () {
            this.style.backgroundColor = "blue";
        }
    }
    
    function submitResult() {
       

        var requiredInputs = document.querySelectorAll(".required");// select required class


        for (var i = 0; i < requiredInputs.length; i++) {

           

            if (isBlank(requiredInputs[i])) {
                e.preventDefault(); //stop submission, change color

                makeRed(requiredInputs[i]);
            }
            else {
                makeClean(requiredInputs[i]);
            }
        }
    }

    function isBlank(inputField) {
        if (inputField.type == "checkbox") {
            if (inputField.checked)
                return false;
            return true;
        }

        if (inputField.value == "") {
            return true;
        }

        if (inputField.type == "description") {
            if (inputField.value == "")
                return true;

            return false;
        }
    }

   
    function makeClean(inputDiv) {
        inputDiv.parentNode.style.backgroundColor = "#FFFFFF";
        inputDiv.parentNode.style.color = "#000000";
    }




    function makeRed(inputDiv) {
        inputDiv.style.backgroundColor = "#AA0000";
        inputDiv.parentNode.style.backgroundColor = "#AA0000";
        inputDiv.parentNode.style.color = "#FFFFFF";
    }



    document.getElementById("submit").addEventListener("click", submitResult);
}