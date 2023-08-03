<!DOCTYPE html>
<html>
<head>
<style>
table,td,tr {
	border:2px solid black;

}
</style>
</head>
<body>

 <h2 class="heading"> Domestic Electricity bill Generater.. </h2>
    <form method="post">
        <label for="units">Enter the units/month:</label>
        <input type="number" name="units" id="units" required><br>
        <input type="submit" value="Generate Bill">
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
 $units = $_POST["units"];
$p050 = 1.95;
$p51100 = 3.10;
$p0100 = 3.40;
$p101200 = 4.80;
$p0200 = 5.10;
$p201300 = 7.70;
$p301400 = 9.00;
$p401800 = 9.50;
$p800 = 10.00;


if ($units <= 100) {

	if ($units <= 50) {

    $bill1 = $units * $p050;
    
    $cuch = 10;
    $fich = 40;
    $eduty = $units * 0.06;

    $tbill = $bill1 + $cuch + $fich + $eduty;

  	echo "<table><tr><td>Your Total Units are</td> <td>$units</td></tr>";
  	echo "<tr><td>Your Units Bill is</td><td> $ubill </td></tr>";
  	echo "<tr><td>Your Total Bill is </td><td><b>$tbill</td></b></tr>";  
  	echo "<tr><td>Your Round up Bill </td>";
  	echo("<td>".round($tbill) . "</td></tr></table>");

	} else {

    $runits = $units - 50;

    $bill1 = 50 * $p050;
  
    $bill2 = $runits * $p51100;
   
    $ubill = $bill1 + $bill2;
  
  
    $cuch = 10;
    $fich = 70;
    $eduty = $units * 0.06;

    $tbill = $ubill + $cuch + $fich + $eduty;

  	echo "<table><tr><td>Your Total Units are</td> <td>$units</td></tr>";
  	echo "<tr><td>Your Units Bill is</td><td> $ubill </td></tr>";
  	echo "<tr><td>Your Total Bill is </td><td><b>$tbill</td></b></tr>";  
  	echo "<tr><td>Your Round up Bill </td>";
  	echo("<td>".round($tbill) . "</td></tr></table>");
  

    } 
  
} elseif ($units >= 100.01 && $units <= 200) {

$runits = $units - 100;

$bill1 = 100 * $p0100;

$bill2 = $runits * $p101200;

$ubill = $bill1 + $bill2;

$cuch = 10;
$fich = 90;
$eduty = $units * 0.06;

$tbill = $ubill + $cuch + $fich + $eduty;

  echo "<table><tr><td>Your Total Units are</td> <td>$units</td></tr>";
  	echo "<tr><td>Your Units Bill is</td><td> $ubill </td></tr>";
  	echo "<tr><td>Your Total Bill is </td><td><b>$tbill</td></b></tr>";  
  	echo "<tr><td>Your Round up Bill </td>";
  	echo("<td>".round($tbill) . "</td></tr></table>");

  
} else {

   if ($units >= 200.01 && $units <= 300) {
     
    $runits = $units - 200;

    $bill1 = 200 * $p0200;

    $bill2 = $runits * $p201300;

    $ubill = $bill1 + $bill2;
    
$cuch = 10;
$fich = 100;
$eduty = $units * 0.06;

$tbill = $ubill + $cuch + $fich + $eduty;

  echo "<table><tr><td>Your Total Units are</td> <td>$units</td></tr>";
  	echo "<tr><td>Your Units Bill is</td><td> $ubill </td></tr>";
  	echo "<tr><td>Your Total Bill is </td><td><b>$tbill</td></b></tr>";  
  	echo "<tr><td>Your Round up Bill </td>";
  	echo("<td>".round($tbill) . "</td></tr></table>");
    
     
     }
   elseif ($units >= 300.01 && $units <= 400) {
     
    $runits = $units - 300;

    $bill1 = 200 * $p0200;
    
    $bill2 = 100 * $p201300;

    $bill3 = $runits * $p301400;

    $ubill = $bill1 + $bill2 + $bill3;
    
$cuch = 10;
$fich = 120;
$eduty = $units * 0.06;

$tbill = $ubill + $cuch + $fich + $eduty;
echo "<table><tr><td>Your Total Units are</td> <td>$units</td></tr>";
  	echo "<tr><td>Your Units Bill is</td><td> $ubill </td></tr>";
  	echo "<tr><td>Your Total Bill is </td><td><b>$tbill</td></b></tr>";  
  	echo "<tr><td>Your Round up Bill </td>";
  	echo("<td>".round($tbill) . "</td></tr></table>");
   
     }
   elseif ($units >= 400.01 && $units <= 800) {
     
    $runits = $units - 400;

    $bill1 = 200 * $p0200;
    
    $bill2 = 100 * $p201300;
    
    $bill3 = 100 * $p301400;

    $bill4 = $runits * $p401800;

    $ubill = $bill1 + $bill2 + $bill3 + $bill4;
    
$cuch = 10;
$fich = 140;
$eduty = $units * 0.06;

$tbill = $ubill + $cuch + $fich + $eduty;

  echo "<table><tr><td>Your Total Units are</td> <td>$units</td></tr>";
  	echo "<tr><td>Your Units Bill is</td><td> $ubill </td></tr>";
  	echo "<tr><td>Your Total Bill is </td><td><b>$tbill</td></b></tr>";  
  	echo "<tr><td>Your Round up Bill </td>";
  	echo("<td>".round($tbill) . "</td></tr></table>");
   
     }
   else {
    
    $runits = $units - 800;

    $bill1 = 200 * $p0200;
    
    $bill2 = 100 * $p201300;
    
    $bill3 = 100 * $p301400;

    $bill4 = 400 * $p401800;
    
    $bill5 = $runits * $p800;

    $ubill = $bill1 + $bill2 + $bill3 + $bill4 + $bill5;
    
$cuch = 10;
$fich = 160;
$eduty = $units * 0.06;

$tbill = $ubill + $cuch + $fich + $eduty;

 echo "<table><tr><td>Your Total Units are</td> <td>$units</td></tr>";
  	echo "<tr><td>Your Units Bill is</td><td> $ubill </td></tr>";
  	echo "<tr><td>Your Total Bill is </td><td><b>$tbill</td></b></tr>";  
  	echo "<tr><td>Your Round up Bill </td>";
  	echo("<td>".round($tbill) . "</td></tr></table>");
   
     } 
  
}
}
?>
 
</body>
</html>
