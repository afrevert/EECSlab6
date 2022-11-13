<?php
$a1 = $_POST["Q1"];
$a2 = $_POST["Q2"];
$a3 = $_POST["Q3"];
$a4 = $_POST["Q4"];
$a5 = $_POST["Q5"];

$score = 0;
echo "Question 1: what is the filetype of this page? <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp You answered: $a1 <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp Correct answer: HTML<br>";
if ($a1 == "HTML"){
  $score++;
}
echo "Question 2: what is 5+5? <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp You answered: $a2 <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp Correct answer: 10<br>";
if ($a2 == 10){
  $score++;
}
echo "Question 3: what is the filetype of the action for this page? <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp You answered: $a3 <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp Correct answer: PHP<br>";
if ($a3 == "PHP"){
  $score++;
}
echo "Question 4: Which fruit is yellow? <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp You answered: $a4 <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp Correct answer: Banana<br>";
if ($a4 == "Banana"){
  $score++;
}
echo "Question 5: Which is not a fruit? <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp You answered: $a5 <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp Correct answer: Potato<br>";
if ($a5 == "Potato"){
  $score++;
}
echo "Total correct: $score / 5 <br>";
$percent = $score / 5 * 100;
echo "Percent: $percent % <br>";
?>
