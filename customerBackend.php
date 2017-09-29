<?php

  echo "<link href="Quiz.css" rel="stylesheet" type="text/css" />";

  $username = '$_POST[username]';
  $password = '$_POST[password]';
  $shipping = '$_POST[shipping]';
  $item1 = '$_POST[item1]';
  $item2 = '$_POST[item2]';
  $item3 = '$_POST[item3]';

  echo "<p>Welcome, your password is " . $password . ", hope no-one is looking...</p><br>";
  echo "<table>";
  echo "<tr>";
  echo "<th>Item</th>";
  echo "<th>Quantity</th>";
  echo "<th>Cost Per Item</th>";
  echo "<th>Sub Total</th>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>15ft High Speed HDMI Cable</td>";
  echo "<td>15ft High Speed HDMI Cable</td>";
  echo "<td>15ft High Speed HDMI Cable</td>";
  echo "<td>15ft High Speed HDMI Cable</td>";
 ?>
