<?php
session_start();
include("db.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

$id = $_SESSION['user_id'];
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url("images/scene-professional-esports-gamer-profile-colored-with-red-blue-light-generative-ai.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
        }

        .card-profile {
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
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

        .form-control,
        .form-select {
            padding: 10px;
            border-radius: 8px;

            color: black;
            border: none;
        }

        .btn-update {
            background: #9333ea;
            border: none;
            border-radius: 8px;
        }

        .btn-update:hover {
            background: darkred;
        }

        .avatar-img {
            border-radius: 50%;
            object-fit: cover;
        }
    </style>

</head>

<body>

    <section class="container-fluid d-flex justify-content-center align-items-center" style="min-height:100vh;">
        <div class="card card-profile overflow-hidden">
            <div class="row g-0">

                <!-- LEFT -->
                <div class="col-md-4 d-none d-md-block">
                    <img src="images/neon-gaming-background.jpg" class="img-fluid h-100">
                </div>

                <!-- RIGHT -->
                <div class="col-md-8 right-container">

                    <h3 class="text-center text-dark mb-4">Edit Profile 🎮</h3>

                    <form action="update_profile.php" method="POST" enctype="multipart/form-data">

                        <div class="row">

                            <div class="col-md-6 mb-4">
                                <label class="mb-3">Gamer Tag</label>
                                <input type="text" name="gamer_tag" class="form-control"
                                    value="<?php echo htmlspecialchars($user['gamer_tag']); ?>">
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="mb-3">Email</label>
                                <input type="email" name="email" class="form-control"
                                    value="<?php echo htmlspecialchars($user['email']); ?>">
                            </div>

                            <!-- PASSWORD (EMPTY) -->
                            <div class="col-md-6 mb-4">
                                <label class="mb-3">New Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter new password">
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="mb-3">Confirm Password</label>
                                <input type="password" placeholder="Confirm password" name="confirm_password" class="form-control">
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="mb-3">Date of Birth</label>
                                <input type="date" name="dob" class="form-control"
                                    value="<?php echo $user['dob']; ?>">
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="mb-3">Gender</label>
                                <select name="gender" class="form-select">
                                    <option value="">Select</option>
                                    <option <?php if ($user['gender'] == "Male") echo "selected"; ?>>Male</option>
                                    <option <?php if ($user['gender'] == "Female") echo "selected"; ?>>Female</option>
                                    <option <?php if ($user['gender'] == "Others") echo "selected"; ?>>Others</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="mb-3">Country</label>
                                <input type="text" name="country" class="form-control"
                                    value="<?php echo htmlspecialchars($user['country']); ?>">
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="mb-3">Favorite Game</label>
                                <input type="text" name="favorite_game" class="form-control"
                                    value="<?php echo htmlspecialchars($user['favorite_game']); ?>">
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="mb-3">Gamer Level</label><br>
                                <input type="radio" name="gamerLevel" value="Beginner"
                                    <?php if ($user['gamer_level'] == "Beginner") echo "checked"; ?>> Beginner

                                <input type="radio" name="gamerLevel" value="Intermediate"
                                    <?php if ($user['gamer_level'] == "Intermediate") echo "checked"; ?>> Intermediate

                                <input type="radio" name="gamerLevel" value="Pro"
                                    <?php if ($user['gamer_level'] == "Pro") echo "checked"; ?>> Pro
                            </div>

                            <div class="col-md-6 mb-4">
                                <label class="mb-3">Avatar</label><br>
                                <img src="uploads/<?php echo $user['avatar']; ?>" width="80" height="80" class="avatar-img mb-2"><br>
                                <input type="file" name="avatar" class="form-control">
                            </div>

                            <div class="col-md-12 mt-3">
                                <button class="btn btn-update w-100 text-white">Update Profile</button>
                            </div>

                            <div class="col-md-12 mt-3 text-center">
                                <a href="index.php" class="btn btn-secondary">⬅ Back to Home</a>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

</body>

</html>