function myFunction()
{

    var name = document.getElementById("Text1").value;
    var email = document.getElementById("Text2").value;
    var desc = document.getElementById("TextArea1").value;
    var numbers = document.getElementById("numbers").value;
    var radio = document.querySelector('input[name = "best"]:checked').value;
    var e = document.getElementById("mySelect");
    var selectedOp = e.options[e.selectedIndex].text;

    var all_location_id = document.querySelectorAll('input[name = "chxBx"]:checked');

    var aIds = [];

    for (var x = 0, l = all_location_id.length; x < l; x++) {
        aIds.push(all_location_id[x].value);
    }

    var str = aIds.join(', ');

    

    document.writeln("Your name: " + name);
    document.writeln("<br>");
    document.writeln("<br>");
    document.writeln("Your email: " + email);
    document.writeln("<br>");
    document.writeln("<br>");
    document.writeln("You chose the following that applied to our site:")
    document.writeln("<br>");
    document.writeln("<br>");
    document.writeln("(" +str +")");
    document.writeln("<br>");
    document.writeln("<br>");
    document.writeln("You rated our site (" + numbers + ") out of 10.");
    document.writeln("<br>");
    document.writeln("<br>");
    document.writeln("You entered (" + radio + ") to be the best thing about our website.");
    document.writeln("<br>");
    document.writeln("<br>");
    document.writeln("You selected (" + selectedOp + ") to best improve our site");
    document.writeln("<br>");
    document.writeln("<br>");
    document.writeln("You sent us: " + desc);

}

