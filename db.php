<?php
$conn = new mysqli("localhost", "root", "", "gaming_hub");

if ($conn->connect_error) {
    die("Connection failed");
}
