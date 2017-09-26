<?php
  echo '<table border="1">';
    echo "<tr>";
      echo "<td></td>";
      for($i = 0; $i < 100; $i++)
      {
        echo "<th>" . ($i+1) . "</th>";
      }
    echo "</tr>";
    for($i = 1; $i < 101; $i++)
    {
      echo "<tr><th>" . $i . "</th>";
      for($j = 1; $j < 101; $j++)
      {
        echo "<td>" . ($i*$j) . "</td>";
      }
      echo"</tr>";
    }

 ?>
