<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblioteka";

// Create connection
//$conn = new mysqli($servername, $username, $password);
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "INSERT INTO `ksiazki` (`id`, `tytul`, `opis`, `stan`) VALUES (NULL, 'aaa', 'vbb', '');";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT * FROM ksiazki";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["tytul"]."<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
