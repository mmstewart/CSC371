window.onload=function ()
{
    function calcTotal() {
        var itemTotal = 0;
        var item1 = parseFloat(document.getElementById("item1").value);
        alert(item1 + "    adAd");
        var item2 = document.getElementById("item2").value;
        var item3 = document.getElementById("item3").value;
        var item4 = document.getElementById("item4").value;
        var item5 = document.getElementById("item5").value;
        //alert(item1);
        //validation
        (item1.checked) ? (itemTotal += item1) : (itemTotal += 0);

        //output
        alert("Total: " + itemTotal);
    }

    document.getElementById("submit").addEventListener("click", calcTotal);

    //alert("fdsfdfb");
}
