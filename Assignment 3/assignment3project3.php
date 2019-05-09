<?php
$name = $_POST['userName'];
$c = $_POST['chxBx'];

echo "<p>Hello, $name!</p>";
echo "<p>Today you ordered:<br>";
$totalprice=0;
$taxprcnt=6.2;
if(!empty($_POST['chxBx'])) {
    foreach($_POST['chxBx'] as $checkBx) {
        echo " $checkBx<br>";
        if (preg_match('/\$(?:\s*?)([\d,.]+)/', $checkBx, $matches))
        {
            //echo $matches[1] . "\n";
            $subtotal+=$matches[1];
            $totalprice=$subtotal;
            $tax=$subtotal*$taxprcnt/100;
            $tax2 = number_format($tax, 2);
            $total = $tax+$totalprice;
            $total2 = number_format($total, 2);
        }
    }
}

echo "<p>Your subtotal is $$subtotal</p>";
echo "<p>Your tax due is $$tax2</p>";
echo "<p>Your total is $$total2</p>";
echo "<p>Thank you for shopping with us today, $name!</p>";

$space= "\n";
$myfile = fopen("newfile3.txt", "w") or die("Unable to open file!");
$n = $name;
fwrite($myfile, $n);
fwrite($myfile, $space);
for ($i=0; $i < count($c); $i++)
{
        $path = $c[$i];   
	    fwrite($myfile, $path);
        fwrite($myfile, $space);
}
$st = $subtotal;
fwrite($myfile, $st);
fwrite($myfile, $space);
$salesTax = $tax2;
fwrite($myfile, $salesTax);
fwrite($myfile, $space);
$totalPrice = $total2;
fwrite($myfile, $totalPrice);
fwrite($myfile, $space);
fclose($myfile);
?>