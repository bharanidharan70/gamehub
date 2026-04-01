<?php
include("db.php");

$email = $_POST['email'] ?? '';

if (empty($email)) {
    header("Location: forgot_password.php?error=empty");
    exit();
}

// check user exists
$result = $conn->query("SELECT * FROM users WHERE email='$email'");

if ($result && $result->num_rows > 0) {

    // 🔐 generate OTP
    $otp = rand(100000, 999999);

    // ⏳ expiry (5 mins)
    $expiry = date("Y-m-d H:i:s", strtotime("+15 minutes"));

    // update DB
    $conn->query("UPDATE users SET otp='$otp', otp_expiry='$expiry' WHERE email='$email'");

    // 📧 send OTP mail
    sendOTP($email, $otp);

    // 👉 redirect to OTP page
    header("Location: verify_otp.php?email=$email");
    exit();
} else {
    header("Location: forgot_password.php?error=notfound");
    exit();
}


// ================= EMAIL FUNCTION =================

function sendOTP($email, $otp)
{

    $data = [
        "personalizations" => [[
            "to" => [["email" => $email]]
        ]],
        "from" => ["email" => "bharanid134@gmail.com"],
        "subject" => "🔐 Password Reset OTP",
        "content" => [[
            "type" => "text/html",
            "value" => "
            <div style='font-family:Arial;padding:20px;background:#0f172a;color:white;border-radius:10px'>
                <h2 style='color:#22c55e;'>🔐 OTP Verification</h2>
                <p>Your OTP for password reset:</p>

                <h1 style='background:#111827;padding:15px;border-radius:8px;letter-spacing:5px;text-align:center'>
                    $otp
                </h1>

                <p>This OTP is valid for <b>5 minutes</b>.</p>

                <p style='margin-top:15px;font-size:12px;color:gray'>
                    Gaming Hub Security Team 🎮
                </p>
            </div>
            "
        ]]
    ];

    sendMail($data);
}


// ================= COMMON SEND FUNCTION =================

function sendMail($data)
{

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
