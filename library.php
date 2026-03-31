<?php
session_start();
include("db.php");

// login check
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// fetch user games
$result = $conn->query("SELECT * FROM user_games WHERE user_id='$user_id'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            background: #0b1120;
            color: white;
            display: flex;
            flex-direction: column;
        }

        /* NAVBAR */
        .navbar {
            background: #0a0f1a;
            padding: 15px 40px;
        }

        .navbar-brand {
            color: #a855f7 !important;
            font-weight: bold;
        }

        .nav-link {
            color: #ccc !important;
        }

        .nav-link:hover {
            color: white !important;
        }

        .btn-login {
            background: #9333ea;
            color: white;
            border-radius: 8px;
        }

        .card {
            background: #1e293b;
            border: none;
            border-radius: 15px;
            transition: 0.3s;
            color: white;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            height: 180px;
            object-fit: cover;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .card-body {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .section-title {
            margin: 40px 0 20px;
        }

        /* FOOTER */
        .footer {
            background: #020617;
            padding: 50px 20px;
            color: #e5e7eb;

            width: 100%;
            position: relative;
            left: 0;
        }

        .footer h5 {
            color: #ffffff;
            margin-bottom: 10px;
        }

        .footer p {
            color: #cbd5e1;
            font-size: 14px;
        }

        .footer a {
            color: #cbd5e1;
            text-decoration: none;
        }

        .footer a:hover {
            color: #a855f7;
        }

        .footer .row {
            row-gap: 25px;
        }

        .footer iframe {
            border-radius: 10px;
            margin-top: 10px;
        }

        .footer hr {
            border-color: #334155;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">

        <a class="navbar-brand fw-bold">🎮 GameHub</a>

        <!-- HAMBURGER -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="navMenu">

            <ul class="navbar-nav mx-auto text-center">

                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="library.php">Library</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="store.php">Store</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="community.php">Community</a>
                </li>


            </ul>

            <!-- RIGHT SIDE -->
            <div class="text-center mt-2 mt-lg-0">

                <?php if (isset($_SESSION['user_id'])) { ?>

                    <span class="text-white me-2">
                        👤 <?= $_SESSION['gamer_tag']; ?>
                    </span>

                    <a href="profile.php" class="btn btn-primary btn-sm me-2">Profile</a>

                    <!-- 🔥 ADMIN QUICK BUTTON -->
                    <?php if(isset($_SESSION['role']) && $_SESSION['role']=='admin'): ?>
                        <a href="admin.php" class="btn btn-warning btn-sm me-2">Admin</a>
                    <?php endif; ?>

                    <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>

                <?php } else { ?>

                    <a href="login.php" class="btn btn-success btn-sm">Sign In</a>

                <?php } ?>

            </div>

        </div>
    </div>
</nav>

    <!-- CONTENT -->
    <div class="container flex-grow-1 mb-5">

        <h3 class="section-title mb-5">🎮 Your Games</h3>
        <div class="row g-4">

            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">

                            <img src="<?php echo $row['game_image']; ?>">

                            <div class="card-body">

                                <h5><?php echo $row['game_name']; ?></h5>

                                <div class="mt-auto">
                                    <button class="btn btn-success w-100 mb-2">Play</button>

                                    <form action="remove_game.php" method="POST">
                                        <input type="hidden" name="game_id" value="<?php echo $row['id']; ?>">
                                        <button class="btn btn-danger w-100">Remove</button>
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>

            <?php
                }
            } else {
                echo "<p class='text-center'>No games downloaded yet 😢</p>";
            }
            ?>

        </div>

    </div>

    <!-- FOOTER -->
    <div class="footer">
        <div class="container-fluid px-5">

            <div class="row">

                <!-- WEBSITE INFO -->
                <div class="col-md-3">
                    <h5>🎮 GameHub</h5>
                    <p>
                        Your ultimate gaming destination.<br>
                        Explore, play, and connect with gamers worldwide.
                    </p>
                </div>

                <!-- QUICK LINKS -->
                <div class="col-md-3">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="library.php">Library</a></li>
                        <li><a href="store.php">Store</a></li>
                        <li><a href="community.php">Community</a></li>
                    </ul>
                </div>

                <!-- SOCIAL -->
                <div class="col-md-3">
                    <h5>Follow Us</h5>
                    <p>
                        🌐 Website <br>
                        📘 Facebook <br>
                        🐦 Twitter <br>
                        📸 Instagram
                    </p>
                </div>

                <!-- CONTACT -->
                <div class="col-md-3">
                    <h5>Contact</h5>
                    <p>
                        📧 support@gamehub.com <br>
                        📞 +91 98765 43210 <br>
                        📍 Chennai, India
                    </p>
                </div>

            </div>

            <!-- MAP -->
            <div class="mt-4">
                <iframe
                    src="https://www.google.com/maps?q=Chennai&output=embed"
                    width="100%" height="220"
                    style="border:0;">
                </iframe>
            </div>

            <hr>

            <!-- COPYRIGHT -->
            <div class="text-center mt-3">
                <p>© 2026 GameHub. All rights reserved.</p>
                <p>Designed for gamers 🎮</p>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>