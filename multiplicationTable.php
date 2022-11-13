<?php
echo "<table>";
for ($a = 0; $a <= 100; $a++) {
  echo "<tr>";
  for ($x = 0; $x <= 100; $x++) {
    if ($x == 0 && $a == 0) {
      echo "<td> </td>";
    }
    else if ($a == 0) {
      echo "<td>$x</td>";
    }
    else if ($x == 0) {
      echo "<td>$a</td>";
    }
    else {
      $mult = $a * $x;
      echo "<td>$mult</td>";
    }
  }
  echo "</tr>";
}
echo "</table>";
?>
