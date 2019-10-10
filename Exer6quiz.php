<?php
$score = 0;
$A1 = $_POST["a1"];
$A2 = $_POST["a2"];
$A3 = $_POST["a3"];
$A4 = $_POST["a4"];
$A5 = $_POST["a5"];

if("$A1" == "Big Coffee Energy")
{
  $total = $total + 20;
}
if("$A2" == "Toriel")
{
  $total = $total + 20;
}
if("$A3" == "A Hotel")
{
  $total = $total + 20;
}
if("$A4" == "Kenny")
{
  $total = $total + 20;
}
if("$A5" == "Spinel")
{
  $total = $total + 20;
}

echo "Question 1: What kind of energy does Billiam Thies send out?<br>";
echo "Your Answer: " . $A1 . "<br>";
echo "Correct Answer: Big Coffee Energy<br><br><br>";

echo "Question 2: Who's the first boss of Undertale?<br>";
echo "Your Answer: " . $A2 . "<br>";
echo "Correct Answer: Toriel<br><br><br>";

echo "Question 3: Luigi's Mansion 3 takes place in what kind of building?<br>";
echo "Your Answer: " . $A3 . "<br>";
echo "Correct Answer: A Hotel<br><br><br>";

echo "Question 4: What's my name?<br>";
echo "Your Answer: " . $A4 . "<br>";
echo "Correct Answer: Kenny<br><br><br>";

echo "Question 5: Rebecca Sugar wrote a song called ''Everything Stays'', which character of hers is based off this song?<br>";
echo "Your Answer: " . $A5 . "<br>";
echo "Correct Answer: Spinel<br><br><br>";

echo "Your Score: " . $total . "%";
?>
