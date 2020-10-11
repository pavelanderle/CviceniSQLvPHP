<?php
/* 
  Doplňte kód tak, aby zobrazil z DB název kraje dle kódu kraje. Kód kraje doplňte do SQL na pevno, 
  není potřeba zadávat pomocí formuláře
*/

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

$sql = "todo SQL";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  
} else {
  echo "0 results";
}
$conn->close();
?>