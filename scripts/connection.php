<?php
$conn = new mysqli('localhost', 'root', '', 'quiz_hk');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>