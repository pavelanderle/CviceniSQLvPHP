<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "kraje_okresy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql="SET CHARACTER SET UTF8";
$conn->query($sql);

$sql = "SELECT nazev FROM kraj";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<h2>SEZNAM KRAJŮ ČR</h2>";
  echo "<table>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
      echo "<td>".$row["nazev"]."</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>