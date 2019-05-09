function myFunction() {
    var f = parseFloat(document.getElementById("fValue").value);
    alert(f);
    //calculate C

    var c = 5 / 9 * (f - 32);
    alert(c);
    //output
    document.getElementById("cValue").innerHTML = c + "";
}
