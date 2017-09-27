<?php

$q1 = "$_POST[q1]";
$q2 = "$_POST[q2]";
$q3 = "$_POST[q3]";
$q4 = "$_POST[q4]";
$q5 = "$_POST[q5]";
$score = 0;
echo '<link href="Quiz.css" rel="stylesheet" type="text/css" />';

echo "<p>Question 1: What is the capitol of Kansas?<br>You answered: " . $q1 . "<br>Correct answer: Topeka</p>";
echo "<p>Question 2: Who is the patriarch of the Simpson family?<br>You answered: " . $q2 . "<br>Correct answer: Homer</p>";
echo "<p>Question 3: The tv show sitcom \"Friends\" had how many seasons?<br>You answered: " . $q3 . "<br>Correct answer: 10</p>";
echo "<p>Question 4: Finish this phrase: \"Day man, fighter of the night man. Champion of the sun. You're a master of _____ and friendship for everyone.\"?<br>You answered: " . $q4 . "<br>Correct answer: karate</p>";
echo "<p>Question 5: Who said, \"I...DECLARE.... BANKRUPTCY!!!\"?<br>You answered: " . $q5 . "<br>Correct answer: Michael Scott</p>";

if($q1 == "Topeka")
{
  $score ++;
}
if($q2 == "Homer")
{
  $score ++;
}
if($q3 == "10")
{
  $score ++;
}
if($q4 == "karate")
{
  $score ++;
}
if($q5 == "Michael Scott")
{
  $score ++;
}

echo "<p>You scored " . $score . "/5  " . ($score/5*100) . "%";
