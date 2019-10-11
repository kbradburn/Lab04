<?php
echo "<link href='style.css' rel='stylesheet' type='text/css'/>";
echo "<h1> Game Shop </h1>";


$ANO = $_POST["Anodyne"];
$ROR2 = $_POST["ROR2"];
$SMO = $_POST["MarioOd"];
$Shipping = $_POST["shipment"];
$Email = $_POST["email"];
$Password = $_POST["password"];



$Anodyne_sales = $ANO*10;
$ROR2_sales = $ROR2*19.99;
$SMO_sales = $SMO*59.99;


$Total = $Anodyne_sales+$ROR2_sales+$SMO_sales+$Shipping;
if($Shipping == 0)
{
  $Temp= "Free 7 Day";
}
if($Shipping == 50)
{
  $Temp = "Overnight";
}
if($Shipping == 5)
{
  $Temp = "3 Day";
}

echo "Thank You For Your Purchase!";
echo "Username: " . $Email . "</p>";
echo "Password: " . $Password . "</p>";


//from example found on w3w tables
echo "<table class='printout'>";
echo "<col width='400'>";
echo "<col width='400'>";
echo "<col width='400'>";
echo "<col width='400'>";
echo "<tr class='printout'>";
echo "<th class='printout text'></td>";
echo "<th class='printout text'>Number of Copies</td>";
echo "<th class='printout text'>Cost of Game</td>";
echo "<th class='printout text'>Total</td></tr>";





//the game sales for anodyne
echo "<tr class='printout'>";
echo "<td class='printout text'>Anodyne</td>";
echo "<td class='printout number'>" . $ANO . "</td>";
echo "<td class='printout number'>$10.00</td>";
echo "<td class='printout number'>$" . $Anodyne_sales . "</td></tr>";




//game sales for risk of rain
echo "<tr class='printout'>";
echo "<td class='printout text'>Risk of Rain 2</td>";
echo "<td class='printout number'>" . $ROR2 . "</td>";
echo "<td class='printout number'>$19.99</td>";
echo "<td class='printout number'>$" . $ROR2_sales . "</td></tr>";




//game sales for super mario
echo "<tr class='printout'>";
echo "<td class='printout text'>Super Mario Odyssey</td>";
echo "<td class='printout number'>" . $SMO . "</td>";
echo "<td class='printout number'>$59.99</td>";
echo "<td class='printout number'>$" . $SMO_sales . "</td></tr>";




//shiping on printout
echo "<tr class='printout'>";
echo "<td class='printout text'>Shipping Costs: </td>";
echo "<td colspan=2 class='printout text'>" . $Temp . "</td>";
echo "<td class='printout number'>$" . $Shipping . "</td></tr>";






//total cost on repeipt
echo "<tr class='printout'>";
echo "<td colspan=3 class='printout text'>Total: </td>";
echo "<td class='printout total'>$" . $Total . "</td></tr></table>";
 ?>
