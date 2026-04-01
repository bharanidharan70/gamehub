<?php include("db.php");
$email = $_GET['email'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #020617, #1e293b);
        }

        .card {
            border-radius: 15px;
            background: #111827;
            color: white;
        }
    </style>
</head>

<body>

    <div class="container d-flex justify-content-center align-items-center vh-100">

        <div class="col-11 col-sm-8 col-md-6 col-lg-4">
            <div class="card p-4 shadow-lg text-center">

                <h3 class="mb-3">🔐 Verify OTP</h3>
                <p class="text-white">Enter the OTP sent to your email</p>

                <form method="POST">

                    <input type="hidden" name="email" value="<?php echo $email; ?>">

                    <input type="text" name="otp"
                        class="form-control mb-3 text-center fw-bold"
                        placeholder="Enter OTP" required>

                    <button class="btn btn-success w-100">Verify OTP</button>

                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $email = $_POST['email'];
                    $otp = $_POST['otp'];

                    $res = $conn->query("SELECT * FROM users WHERE email='$email'");
                    $row = $res->fetch_assoc();

                    if ($row['otp'] == $otp && strtotime($row['otp_expiry']) > time()) {
                        header("Location: reset_password.php?email=$email");
                        exit();
                    } else {
                        echo "<p class='text-danger mt-2'>❌ Invalid or expired OTP</p>";
                    }
                }
                ?>

            </div>
        </div>

    </div>

</body>

</html>