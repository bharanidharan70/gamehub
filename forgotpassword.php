<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url("images/scene-professional-esports-gamer-profile-colored-with-red-blue-light-generative-ai.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
        }

        .card-login {
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
            overflow: hidden;
        }

        .left-side img {
            height: 100%;
            object-fit: cover;
        }

        .right-container {
            background-image: url("images/handmade-skull-laid-orange-paper-stripe.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 40px;
        }

        label {
            font-weight: 600;
        }

        .form-control {
            padding: 10px;
            border-radius: 8px;

            color: black;
            border: none;
        }

        .form-control::placeholder {
            color: #aaa;
        }

        .btn-submit {
            background: #9333ea;
            border: none;
            border-radius: 8px;
        }

        .btn-submit:hover {
            background: darkred;
        }

        .top-link {
            color: blue;
            text-decoration: none;
            font-weight: 500;
        }

        .top-link:hover {
            color: black;
        }
    </style>

</head>

<body>

    <div class="container mt-5 mb-5">

        <!-- Back -->
        <a href="login.php" class="text-white text-decoration-none mb-3 d-inline-block">← Back to Login</a>

        <div class="card card-login">
            <div class="row g-0">

                <!-- LEFT -->
                <div class="col-md-5 d-none d-md-block left-side">
                    <img src="images/futuristic-ninja-digital-art 2.jpg" class="img-fluid">
                </div>

                <!-- RIGHT -->
                <div class="col-md-7 right-container">

                    <div class="text-center mb-4">
                        <h3 class="text-dark">Forgot Password</h3>
                        <p class="text-muted">Enter your email to reset password</p>
                    </div>

                    <!-- ERROR MESSAGE -->
                    <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger text-center">
                            ❌ Email not found
                        </div>
                    <?php } ?>

                    <form action="forgot_action.php" method="POST">

                        <div class="mb-3">
                            <label class="mb-2">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                        </div>

                        <button type="submit" class="btn btn-submit w-100 text-white">Reset Password</button>

                    </form>

                    <div class="text-center mt-3">
                        <a href="login.php" class="top-link">Back to Login</a>
                    </div>

                </div>
            </div>
        </div>

    </div>

</body>

</html>