<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Hub - Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

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
            margin-bottom: 5px;
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

        .btn-login {
            background: #9333ea;
            border: none;
            border-radius: 8px;
            padding: 10px;
        }

        .btn-login:hover {
            background: darkred;
        }

        .top-link {
            text-decoration: none;
            color: blue;
            font-weight: 500;
        }

        .top-link:hover {
            color: black;
        }
    </style>

</head>

<body>

    <div class="container mt-5 mb-5">

        <!-- Back to Home -->
        <a href="index.php" class="text-white text-decoration-none mb-3 d-inline-block">
            ← Back to Home
        </a>

        <div class="card card-login">
            <div class="row g-0">

                <!-- LEFT IMAGE -->
                <div class="col-md-5 d-none d-md-block left-side">
                    <img src="https://wallpapercave.com/wp/wp11472937.jpg" class="img-fluid">
                </div>

                <!-- RIGHT FORM -->
                <div class="col-md-7 right-container">

                    <div class="text-center mb-4">
                        <h3 class="text-dark">Sign In</h3>
                        <p class="text-dark">Welcome back gamer 🎮</p>
                    </div>


                    <?php if (isset($_GET['reset']) && isset($_GET['pass'])) { ?>
                        <div class="alert alert-success text-center">
                            ✅ Password reset successful! <br>
                            Your new password:
                            <b><?php echo $_GET['pass']; ?></b>
                        </div>
                    <?php } ?>
                    <form action="login_action.php" method="POST">

                        <!-- EMAIL -->
                        <div class="mb-3">
                            <label>Email<span class="text-danger"> *</span></label>
                            <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                        </div>

                        <!-- PASSWORD -->
                        <div class="mb-3 position-relative">
                            <label>Password<span class="text-danger"> *</span></label>
                            <input type="password" id="password" class="form-control pe-5"
                                name="password" placeholder="Enter password" required>

                            <i id="eyeIcon" class="bi bi-eye position-absolute"
                                onclick="togglePassword()"
                                style="top:38px; right:15px; cursor:pointer;"></i>
                        </div>

                        <!-- BUTTON -->
                        <button type="submit" class="btn btn-login w-100 text-white">Sign In</button>

                    </form>

                    <!-- LINKS -->
                    <div class="d-flex justify-content-between mt-3">
                        <a href="forgotpassword.php" class="top-link">Forgot Password?</a>
                        <a href="signup.php" class="top-link">Create Account</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            let pass = document.getElementById("password");
            let icon = document.getElementById("eyeIcon");

            if (pass.type === "password") {
                pass.type = "text";
                icon.classList.replace("bi-eye", "bi-eye-slash");
            } else {
                pass.type = "password";
                icon.classList.replace("bi-eye-slash", "bi-eye");
            }
        }
    </script>

</body>

</html>