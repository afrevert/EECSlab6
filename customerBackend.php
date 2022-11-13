<?php
$password = $_POST["password"];
$username = $_POST["username"];
$shoes = $_POST["shoes"];
$shirts = $_POST["shirts"];
$pants = $_POST["pants"];
$shipping = $_POST["shipping"];

echo "<head> <link rel='stylesheet' href='style.css'> </head>";
echo "<body>";

echo "<div class='content'>";

echo "Welcome, $username ! <br>";
echo "Your password: $password <br>";

echo "<table>";

echo "<tr>";
echo "<th> </th>";
echo "<th>Quantity</th>";
echo "<th>Price</th>";
echo "<th>Total</th>";
echo "</tr>";

echo "<tr>";
echo "<td>Shoes</td>";
echo "<td>$shoes</td>";
echo "<td>$100.00</td>";
$shoeTotal ="$" . strval($shoes * 100) . ".00";
echo "<td>$shoeTotal</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Shirts</td>";
echo "<td>$shirts</td>";
echo "<td>$25.00</td>";
$shirtTotal ="$" . strval($shirts * 25) . ".00";
echo "<td>$shirtTotal</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Pants</td>";
echo "<td>$pants</td>";
echo "<td>$25.00</td>";
$pantsTotal ="$" . strval($pants * 25) . ".00";
echo "<td>$pantsTotal</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Shipping</td>";
$shippingName = "";
if ($shipping == 0)
{
    $shippingName = "Free 7 day";
}
if ($shipping == 5)
{
    $shippingName = "$5.00 3 day";
}

if ($shipping == 50)
{
    $shippingName = "$50.00 overnight";
}
$shippingString ="$" . strval($shipping) . ".00";
echo "<td>$shippingName</td>";
echo "<td>$shippingString</td>";
echo "<td>$shippingString</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Total</td>";
echo "<td> </td>";
echo "<td> </td>";
$total ="$" . strval($pants * 25 + $shirts * 25 + $shoes * 100 + $shipping) . ".00";
echo "<td>$total</td>";
echo "</tr>";




echo "</table>";
echo "</div>";

echo "<body>";