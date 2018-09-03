<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdinamis";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM blog";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. "<br>";
        echo "judul: " . $row["judul"]. "<br>";
        echo "konten: " . $row["konten"]. "<br>";
        echo "jenis: " . $row["jenis"]. "<br>";
        echo "tanggal: " . $row["tanggal"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 