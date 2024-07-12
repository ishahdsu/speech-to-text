<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "orders";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$data = json_decode(file_get_contents('php://input'), true);
$text = $data['text'];


$stmt = $conn->prepare("INSERT INTO text (text) VALUES (?)");
$stmt->bind_param("s", $text);

if ($stmt->execute()) {
    $response = ["message" => "Text saved successfully!"];
} else {
    $response = ["message" => "Error: " . $stmt->error];
}

$stmt->close();
$conn->close();

echo json_encode($response);
?>
