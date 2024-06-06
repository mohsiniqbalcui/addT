<?php
$servername = "localhost";
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "ticket_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userName = $conn->real_escape_string($_POST['userName']);
$userEmail = $conn->real_escape_string($_POST['userEmail']);
$userQuery = $conn->real_escape_string($_POST['userQuery']);
$queryId = strtoupper(substr(md5(time() . mt_rand()), 0, 10));

$sql = "INSERT INTO queries (query_id, name, email, query) VALUES ('$queryId', '$userName', '$userEmail', '$userQuery')";

if ($conn->query($sql) === TRUE) {
    echo "Your ticket is recorded now with ID: $queryId";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
