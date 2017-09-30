<?php

  echo '<link href="Quiz.css" rel="stylesheet" type="text/css" />';

  $username = $_GET["username"];
  $password = $_GET["password"];
  $shipping = $_GET["shipping"]; $shippingCost = 0;
  $item1 = $_GET["item1"]; $item1total = ($item1*30);
  $item2 = $_GET["item2"]; $item2total = ($item2*13);
  $item3 = $_GET["item3"]; $item3total = number_format(($item3*6.66),'2');


  //echo "<body>";
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
  echo "<td>" . $item1 . "</td>";
  echo "<td>$30.00</td>";
  echo "<td>$" . $item1total . ".00</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td>Industrial Staples - 800 Count</td>";
  echo "<td>" . $item2 . "</td>";
  echo "<td>$13.00</td>";
  echo "<td>$" . $item2total . ".00</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td>Whoopee Cushion</td>";
  echo "<td>" . $item3 . "</td>";
  echo "<td>$6.66</td>";
  echo "<td>$" . $item3total . "</td>";
  echo "</tr>";

  echo "<tr>";

  switch($shipping)
  {
    case "free":
      echo '<td colspan = "3">Shipping: Free 7 Day</td>';
      echo "<td>$0.00</td>";
      $shippingCost = 0;
      break;
    case "threeDay":
      echo '<td colspan = "3">Shipping: 3 Day</td>';
      echo "<td>$5.00</td>";
      $shippingCost = 5;
      break;
    case "overNight":
      echo '<td colspan = "3">Shipping: Over Night</td>';
      echo "<td>$50.00</td>";
      $shippingCost = 50;
      break;
  }
  echo "</tr>";

  echo "<tr>";
  echo '<th colspan = "3">Total Cost</td>';
  echo '<td id="total">$' . number_format(($item1total + $item2total + $item3total + $shippingCost),"2") . "</td>";

 ?>
