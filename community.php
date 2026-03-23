<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Community</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        body {
            background: #0b1120;
            color: white;
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

        /* HERO */
        .hero {
            padding: 40px;
            background: linear-gradient(to right, #1e293b, #020617);
            border-radius: 15px;
            margin-bottom: 30px;
        }

        .hero h2 {
            font-weight: bold;
        }

        /* POST CARD */
        .post {
            background: #1e293b;
            border-radius: 15px;
            padding: 15px;
            margin-bottom: 20px;
            transition: 0.3s;
        }

        .post:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 15px rgba(147, 51, 234, 0.5);
        }

        .post-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .post-user {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .avatar {
            width: 40px;
            height: 40px;
            background: #9333ea;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .post-actions {
            display: flex;
            gap: 15px;
            margin-top: 10px;
            font-size: 14px;
            color: #aaa;
        }

        .post-actions span {
            cursor: pointer;
        }

        .post-actions span:hover {
            color: white;
        }

        /* SIDEBAR */
        .sidebar {
            background: #1e293b;
            padding: 15px;
            border-radius: 15px;
        }

        .sidebar h5 {
            margin-bottom: 15px;
        }

        /* FOOTER */
        .footer {
            background: #020617;
            padding: 50px 20px;
            margin-top: 50px;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">

        <a class="navbar-brand">🎮 GameHub</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">

            <ul class="navbar-nav mx-auto text-center">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="library.php">Library</a></li>
                <li class="nav-item"><a class="nav-link" href="store.php">Store</a></li>
                <li class="nav-item"><a class="nav-link" href="community.php">Community</a></li>
            </ul>

            <div>
                <?php if (isset($_SESSION['user_id'])) { ?>
                    <span class="text-white me-2">👤 <?php echo $_SESSION['gamer_tag']; ?></span>
                    <a href="profile.php" class="btn btn-login me-2">Profile</a>
                    <a href="logout.php" class="btn btn-danger">Logout</a>
                <?php } else { ?>
                    <a href="login.php" class="btn btn-login">Sign In</a>
                <?php } ?>
            </div>

        </div>
    </div>
</nav>

<div class="container mt-4">

    <!-- HERO -->
    <div class="hero">
        <h2>👥 Gamer Community</h2>
        <p>Share your achievements, connect with gamers, and explore trending posts 🔥</p>
    </div>

    <div class="row">

        <!-- POSTS -->
        <div class="col-md-8">

            <!-- POST TEMPLATE -->
            <?php 
            $posts = [
                ["ProGamerX","Reached level 100 in Battle Arena 🔥"],
                ["ShadowNinja","Clutched a 1v5 match 😎"],
                ["EliteSniper","Top 1 in leaderboard today 🎯"],
                ["SpaceRider","Explored new galaxy 🌌"],
                ["DarkKnight","Unlocked legendary weapon ⚔️"],
                ["BulletMaster","100% accuracy 😮"],
                ["DriftLegend","New drift record 🏁"],
                ["StrategyKing","Won using strategy 🧠"],
                ["ZombieHunter","Survived 50 waves 🧟"],
                ["GameMaster","Completed all missions ✔"],
                ["ThunderPlayer","Fastest win ⚡"],
                ["FireStorm","Burned enemies 🔥"],
                ["ArcherPro","Perfect aim 🎯"],
                ["KingGamer","Claimed crown 🏆"],
                ["PixelHero","Retro high score 💾"],
                ["SpeedDemon","Won 5 races 🏎️"],
                ["DefenderX","Defended base 🛡️"],
                ["NoobToPro","From beginner to pro 💪"],
                ["GalaxyGamer","New spaceship 🚀"],
                ["WarHero","Final victory 🏆"]
            ];

            foreach($posts as $p) { ?>
            
            <div class="post">
                <div class="post-header">
                    <div class="post-user">
                        <div class="avatar"><?php echo strtoupper($p[0][0]); ?></div>
                        <strong><?php echo $p[0]; ?></strong>
                    </div>
                    <span>⋮</span>
                </div>

                <p class="mt-2"><?php echo $p[1]; ?></p>

                <div class="post-actions">
                    <span>👍 Like</span>
                    <span>💬 Comment</span>
                    <span>🔁 Share</span>
                </div>
            </div>

            <?php } ?>

        </div>

        <!-- SIDEBAR -->
        <div class="col-md-4">
            <div class="sidebar">
                <h5>🔥 Trending Gamers</h5>
                <p>👑 KingGamer</p>
                <p>⚔️ ShadowNinja</p>
                <p>🎯 EliteSniper</p>
            </div>

            <div class="sidebar mt-4">
                <h5>🎮 Popular Games</h5>
                <p>Neon Legends</p>
                <p>Battle Arena</p>
                <p>Velocity Rush</p>
            </div>
        </div>

    </div>

</div>

<!-- FOOTER -->
<div class="footer text-center">
    <p>© 2026 GameHub. All rights reserved.</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>