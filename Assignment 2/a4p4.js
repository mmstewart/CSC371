function gradeTest() {

    //variables with global implications
    var totalQuestions = 5;
    var correctAnswers = 0;
    var alertTotal = "f";
    var i;
    var alert1 = "a";
    var alert2 = "b";
    var alert3 = "c";
    var alert4 = "d";
    var alert5 = "e";
    exam();
    var fname = document.getElementById("Text1").value;
    var lname = document.getElementById("Text2").value;
    var email = document.getElementById("Text3").value;

    document.writeln("Your first name is " + fname + ".");
    document.writeln("<br>");
    document.writeln("<br>");
    document.writeln("Your last name is " + lname + ".");
    document.writeln("<br>");
    document.writeln("<br>");
    document.writeln("Your email is " + email + ".");
    document.writeln("<br>");
    document.writeln("<br>");

    
    document.writeln("Your quiz results: ");
    document.writeln("<br>");
    document.writeln("<br>");
    document.writeln("************************");
    document.writeln("<br>");
    document.writeln("<br>");
    document.writeln(alert1);
    document.writeln("<br>");
    document.writeln("<br>");
    document.writeln(alert2);
    document.writeln("<br>");
    document.writeln("<br>");
    document.writeln(alert3);
    document.writeln("<br>");
    document.writeln("<br>");
    document.writeln(alert4);
    document.writeln("<br>");
    document.writeln("<br>");
    document.writeln(alert5);
    document.writeln("<br>");
    document.writeln("<br>");
    document.writeln(alertTotal);
    document.writeln("<br>");
    document.writeln("<br>");
    document.writeln("************************");


    function exam() {
        //q1
        if (document.getElementById("q0a").checked)
        {
                correctAnswers++;
                alert1 = "Your answer for Question 1 is true.";
            } else {
                alert1 = "You answered incorrectly for Question 1. The right answer is: nontraditional-age students.";
        }
        //q2
        var a2 = document.getElementsByName('question2');
        for (i = 0; i < a2.length; i++) {
            if (a2[i].checked) {
                if (a2[i].value == 'd') {
                    correctAnswers++;
                    alert2 = "Your answer for Question 2 is true.";
                    break;
                }
                else {
                    alert2 = "You answered " + a2[i].value + ", which is false. The correct answer is (His parents emigrated from overseas before he was born).";
                }
            }
        }
        //q3
        var a3 = document.getElementsByName('question3');
        for (i = 0; i < a3.length; i++) {
            if (a3[i].checked) {
                if (a3[i].value == 'b') {
                    correctAnswers++;
                    alert3 = "Your answer for Question 3 is true.";
                    break;
                }
                else {
                    alert3 = "You answered " + a3[i].value + ", which is false. The correct answer is (0).";
                }
            }
        }
        //q4
        var a4 = document.getElementsByName('question4');
        for (i = 0; i < a4.length; i++) {
            if (a4[i].checked) {
                if (a4[i].value == 'a') {
                    correctAnswers++;
                    alert4 = "Your answer for Question 4 is true.";
                    break;
                }
                else {
                    alert4 = "You answered " + a4[i].value + ", which is false. The correct answer is (London).";
                }
            }
        }
        //q5
        var a5 = document.getElementsByName('question5');
        for (i = 0; i < a5.length; i++) {
            if (a5[i].checked) {
                if (a5[i].value == 'c') {
                    correctAnswers++;
                    alert5 = "Your answer for Question 5 is true.";
                    break;
                }
                else {
                    alert5 = "You answered " + a5[i].value + ", which is false. The correct answer is (Asia).";
                }
            }
        }
        //total
        if (correctAnswers == totalQuestions) {
            alertTotal = "Congratulations! You got 100%";
        }
        else {
            alertTotal = "You got " + ((correctAnswers/totalQuestions)*100) + "% correct.";
        }

    }
}
