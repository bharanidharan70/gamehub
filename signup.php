<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

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

        .form-control,
        .form-select {
            padding: 10px;


            color: black;
            border: none;
        }

        .form-control::placeholder {
            color: #aaa;
        }

        .btn-signup {
            background: #9333ea;
            border: none;
            border-radius: 8px;
            padding: 10px;
        }

        .btn-signup:hover {
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

    <div class="container mt-4 mb-5">

        <!-- Back to Home -->
        <a href="index.php" class="text-white text-decoration-none mb-3 d-inline-block">← Back to Home</a>

        <div class="card card-login">
            <div class="row g-0">

                <!-- LEFT IMAGE -->
                <div class="col-md-4 d-none d-md-block left-side">
                    <img src="images/futuristic-ninja-digital-art.jpg" class="img-fluid">
                </div>

                <!-- RIGHT FORM -->
                <div class="col-md-8 right-container">

                    <div class="text-center mb-4">
                        <h3 class="text-dark">Create Account</h3>
                        <p class="text-dark">Join the gaming world 🎮</p>
                    </div>

                    <form action="signup_action.php" method="POST" enctype="multipart/form-data">

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label>Gamer Tag <span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="gamer_tag" required>
                            </div>

                            <div class="col-md-6 mb-3 position-relative">
                                <label>Password <span class="text-danger"> *</span></label>
                                <input type="password" id="password" class="form-control pe-5" name="password" required>
                                <i class="bi bi-eye position-absolute" style="top:38px; right:15px; cursor:pointer;"
                                    onclick="togglePassword('password', this)"></i>
                            </div>

                            <div class="col-md-6 mb-3 position-relative">
                                <label>Confirm Password <span class="text-danger"> *</span></label>
                                <input type="password" id="confirmPassword" class="form-control pe-5" name="confirm_password" required>
                                <i class="bi bi-eye position-absolute" style="top:38px; right:15px; cursor:pointer;"
                                    onclick="togglePassword('confirmPassword', this)"></i>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Email <span class="text-danger"> *</span></label>
                                <input type="email" class="form-control" name="email" required>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control" name="dob">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label>Gender <span class="text-danger"> *</span></label>
                                <select class="form-select" name="gender" required>
                                    <option value="">Select</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Others</option>
                                </select>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label>Country <span class="text-danger"> *</span></label>
                                <select class="form-select" name="country" required>
                                    <option value="">Select</option>
                                    <option>India</option>
                                    <option>USA</option>
                                    <option>UK</option>
                                    <option>Japan</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Favorite Game</label>
                                <input type="text" class="form-control" name="favorite_game">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Gamer Level</label><br>
                                <input type="radio" name="gamerLevel" value="Beginner" required> Beginner
                                <input type="radio" name="gamerLevel" value="Intermediate"> Intermediate
                                <input type="radio" name="gamerLevel" value="Pro"> Pro
                            </div>

                            <div class="col-md-12 mb-3">
                                <label>Upload Avatar <span class="text-danger"> *</span></label>
                                <input type="file" class="form-control" name="avatar" required>
                            </div>

                            <div class="col-md-12 mb-3">
                                <input type="checkbox" required> I agree to Terms & Conditions <span class="text-danger"> *</span>
                            </div>

                            <div class="col-md-12 mt-3">
                                <button type="submit" class="btn btn-signup w-100 text-white">Sign Up</button>
                            </div>

                        </div>
                    </form>

                    <div class="text-center mt-3">
                        <a href="login.php" class="top-link">Already have an account? Login</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePassword(fieldId, icon) {
            let input = document.getElementById(fieldId);

            if (input.type === "password") {
                input.type = "text";
                icon.classList.replace("bi-eye", "bi-eye-slash");
            } else {
                input.type = "password";
                icon.classList.replace("bi-eye-slash", "bi-eye");
            }
        }
    </script>

</body>

</html>