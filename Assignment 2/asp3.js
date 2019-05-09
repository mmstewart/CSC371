var conVal = 12;
function Calc() {
    document.forms[0].elements[1].value = document.forms[0].elements[0].value / conVal;
}
function ChangeVal() {
    for (var i = 0; i < 32; i++) {
        if (document.forms[0].convert.options[i].selected == true) {
            conVal = document.forms[0].convert.options[i].value;
        }
    }
    if (conVal == "NaN") {
        alert("You must select a conversion path!");
    }
}