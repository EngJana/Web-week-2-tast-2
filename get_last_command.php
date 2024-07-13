<?php
// Set the content type to application/json
header('Content-Type: application/json');

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot_control";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "Connection failed: " . $conn->connect_error]));
}

// SQL to get the last command
$sql = "SELECT direction, timestamp FROM robot_control ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

// Check if there is a result
if ($result->num_rows > 0) {
    // Fetch the last row
    $row = $result->fetch_assoc();
    echo json_encode(["status" => "success", "direction" => $row['direction'], "timestamp" => $row['timestamp']]);
} else {
    echo json_encode(["status" => "error", "message" => "No commands found"]);
}

// Close the connection
$conn->close();
?>