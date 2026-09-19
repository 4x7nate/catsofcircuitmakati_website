<?php
$servername = "localhost";
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "cats_db"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, age, image FROM cats";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='cat'>";
        echo "<img src='" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['name']) . "'>";
        echo "<div class='cat-info'>";
        echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
        echo "<p>Age: " . htmlspecialchars($row['age']) . "</p>";
        echo "<a href='cat_adoption.php?id=" . htmlspecialchars($row['id']) . "'>Info</a>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>