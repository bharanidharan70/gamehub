<?php $email = $_GET['email']; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>

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
            <div class="card p-4 shadow-lg">

                <h3 class="text-center mb-3">🔐 Reset Password</h3>

                <form action="update_password.php" method="POST">

                    <input type="hidden" name="email" value="<?php echo $email; ?>">

                    <input type="password" name="password"
                        class="form-control mb-3"
                        placeholder="New Password" required>

                    <input type="password" name="confirm"
                        class="form-control mb-3"
                        placeholder="Confirm Password" required>

                    <button class="btn btn-primary w-100">Update Password</button>

                </form>

            </div>
        </div>

    </div>

</body>

</html>