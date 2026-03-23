<?php
session_start();
include("db.php");

// prevent undefined errors
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// basic validation
if (empty($email) || empty($password)) {
    echo "Please fill all fields";
    exit();
}

// check user by email
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {

    $user = $result->fetch_assoc();

    // verify password
    if (password_verify($password, $user['password'])) {

        // session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['gamer_tag'] = $user['gamer_tag'];

        header("Location: index.php");
        exit();
    } else {
        echo "❌ Wrong Password";
    }
} else {
    echo "❌ User Not Found";
}
