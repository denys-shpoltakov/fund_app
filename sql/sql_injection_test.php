<?php
require_once '../app/db.php';

$email = $_GET['email'] ?? '';

$sql = "SELECT id, full_name FROM users WHERE email = '$email'";
$result = mysqli_query($connect, $sql);

echo "<h3>kwerenda:</h3>$sql<br><br>";

echo "<h3>wynik:</h3>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "ID: {$row['id']}, Name: {$row['full_name']}<br>";
}
