<?php
$conn = new mysqli("localhost", "root", "", "guvi_db");
if ($conn->connect_error) {
    die("Database Connection Failed");
}
?>
