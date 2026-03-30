<?php
include("db.php");

$id = $_GET['id'];

// current status check
$user = $conn->query("SELECT status FROM users WHERE id=$id")->fetch_assoc();

if($user['status'] == 'blocked'){
    $conn->query("UPDATE users SET status='active' WHERE id=$id");
}else{
    $conn->query("UPDATE users SET status='blocked' WHERE id=$id");
}

header("Location: admin.php");
?>