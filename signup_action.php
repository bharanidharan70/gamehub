<?php
include("db.php");

// safe input
$gamer_tag = $_POST['gamer_tag'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$confirm_password = $_POST['confirm_password'] ?? '';
$dob = $_POST['dob'] ?? '';
$gender = $_POST['gender'] ?? '';
$country = $_POST['country'] ?? '';
$favorite_game = $_POST['favorite_game'] ?? '';
$gamer_level = $_POST['gamerLevel'] ?? '';

// validation
if (empty($gamer_tag) || empty($email) || empty($password)) {
    echo "Please fill all required fields";
    exit();
}

// password match check
if ($password !== $confirm_password) {
    echo "❌ Password mismatch";
    exit();
}

// check existing email
$check = $conn->query("SELECT * FROM users WHERE email='$email'");
if ($check && $check->num_rows > 0) {
    echo "❌ Email already registered";
    exit();
}

// hash password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// FILE UPLOAD SAFE
$avatar_name = $_FILES['avatar']['name'];
$tmp_name = $_FILES['avatar']['tmp_name'];

$upload_dir = "uploads/";

// create folder if not exists
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

// unique file name
$new_name = time() . "_" . basename($avatar_name);
$target_file = $upload_dir . $new_name;

// move file
if (!move_uploaded_file($tmp_name, $target_file)) {
    echo "❌ File upload failed";
    exit();
}

// INSERT
$sql = "INSERT INTO users 
(gamer_tag, email, password, dob, gender, country, favorite_game, gamer_level, avatar)
VALUES 
('$gamer_tag', '$email', '$hashed_password', '$dob', '$gender', '$country', '$favorite_game', '$gamer_level', '$new_name')";

if ($conn->query($sql)) {

$userEmail = $email;
$userName  = $gamer_tag;

sendMailToUser($userEmail, $userName);
sendMailToAdmin($userEmail, $userName);

    echo "<script>
    alert('🎉 Registration Successful! Please login');
    window.location='login.php';
    </script>";
    exit();

} else {

    echo "<script>
    alert('❌ Database Error: ".$conn->error."');
    window.history.back();
    </script>";
}
function sendMail($data) {
    $apiKey = "xxxxxx";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer $apiKey",
        "Content-Type: application/json"
    ]);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_exec($ch);
    curl_close($ch);
}
function sendMailToAdmin($email, $name) {
    $data = [
        "personalizations" => [[
            "to" => [["email" => "bharanid134@gmail.com"]]
        ]],
        "from" => ["email" => "bharanid134@gmail.com"],
        "subject" => "🚀 New User Registered",
        "content" => [[
            "type" => "text/html",
            "value" => "
            <div style='font-family:Arial;padding:20px;background:#111827;color:white;border-radius:10px'>
                <h2 style='color:#f59e0b;'>🚀 New User Registration</h2>
                
                <table style='width:100%;margin-top:15px;border-collapse:collapse'>
                    <tr>
                        <td style='padding:10px;background:#1f2937'>👤 Name</td>
                        <td style='padding:10px;background:#374151'>$name</td>
                    </tr>
                    <tr>
                        <td style='padding:10px;background:#1f2937'>📧 Email</td>
                        <td style='padding:10px;background:#374151'>$email</td>
                    </tr>
                </table>

                <p style='margin-top:15px;'>A new user has joined Gaming Hub 🎮</p>

                <p style='font-size:12px;color:gray;margin-top:20px'>
                    System Notification
                </p>
            </div>
            "
        ]]
    ];

    sendMail($data);
}
function sendMailToUser($email, $name) {
    $data = [
        "personalizations" => [[
            "to" => [["email" => $email]]
        ]],
        "from" => ["email" => "bharanid134@gmail.com"],
        "subject" => "🎮 Welcome to Gaming Hub!",
        "content" => [[
            "type" => "text/html",
            "value" => "
            <div style='font-family:Arial;padding:20px;background:#0f172a;color:white;border-radius:10px'>
                <h2 style='color:#38bdf8;'>🎮 Welcome to Gaming Hub</h2>
                <p>Hi <b>$name</b>,</p>
                <p>🔥 Your account has been successfully created!</p>
                
                <div style='background:#1e293b;padding:15px;border-radius:8px;margin:15px 0'>
                    <p>🚀 Start exploring games</p>
                    <p>🎯 Track your progress</p>
                    <p>🏆 Compete with others</p>
                </div>

                <p>We’re excited to have you onboard 😄</p>

                <a href='https://gaminghubstore.ct.ws/login.php' 
                   style='display:inline-block;padding:10px 20px;background:#22c55e;color:white;text-decoration:none;border-radius:5px'>
                   Login Now
                </a>

                <p style='margin-top:20px;font-size:12px;color:gray'>
                    Gaming Hub Team 🎮
                </p>
            </div>
            "
        ]]
    ];

    sendMail($data);
}