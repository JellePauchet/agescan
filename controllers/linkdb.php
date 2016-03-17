<?php
$conn = new mysqli("localhost", "sjatoo_kassa", "^xiDOx(#-S8Z", "sjatoo_kassatelling");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
?>