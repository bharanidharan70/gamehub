<?php
session_start();
include("db.php");

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header("Location:index.php");
    exit();
}

$id = $_GET['id'];

// prevent admin delete
$check = $conn->query("SELECT role FROM users WHERE id='$id'");
$user = $check->fetch_assoc();

if ($user['role'] == 'admin') {
    echo "Cannot delete admin";
    exit();
}

// delete
$conn->query("DELETE FROM users WHERE id='$id'");

header("Location:admin.php");
