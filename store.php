<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        body {
            background: #0b1120;
            color: white;
        }

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
            border-radius: 15px;
            transition: 0.3s;
            overflow: hidden;
            color: white;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            height: 180px;
            object-fit: cover;
        }

        .price {
            color: #22c55e;
            font-weight: bold;
        }

        .btn-download {
            border: 1px solid #ccc;
            color: white;
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

        /* CARD */
        .card {
            background: #1e293b;
            border-radius: 18px;
            border: none;
            overflow: hidden;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 15px 30px rgba(168, 85, 247, 0.3);
        }

        /* IMAGE */
        .card img {
            height: 180px;
            object-fit: cover;
        }

        /* TEXT */
        .card h5 {
            font-size: 16px;
            font-weight: 600;
        }

        /* SMALL TEXT */
        .small {
            font-size: 13px;
        }

        /* BUTTONS */
        .btn-primary {
            background: linear-gradient(45deg, #9333ea, #3b82f6);
            border: none;
            color: white;
            font-weight: 500;
        }

        .btn-primary:hover {
            opacity: 0.9;
        }

    </style>
</head>

<body>

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

    <div class="container mt-4">
        <h3 class="mb-5">🛒 Game Store</h3>

        <div class="row">



            <!-- 1 -->
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
    <div class="card game-card">

        <img src="https://wallpapercave.com/wp/wp10439053.jpg" class="card-img-top">

        <div class="card-body">

            <!-- TITLE + RATING -->
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="mb-1">Neon Legends</h6>
                <span class="rating text-warning fw-bold">⭐ 4.0</span>
            </div>

            <!-- STUDIO -->
            <p class="studio mb-1">Neon Studios</p>

            <!-- TAGS -->
            <div class="tags mb-2">
                <span class="badge bg-info">Arcade</span>
                <span class="badge bg-dark">Cyberpunk</span>
                <span class="badge bg-success">Multiplayer</span>
            </div>

            <!-- DETAILS -->
            <p class="small text-white-50 mb-1">
                🎮 PC, Mobile <br>
                👥 Multiplayer <br>
                📅 2024 Release
            </p>

            <!-- DOWNLOAD -->
            <p class="small text-white-50 mb-1">
                ⬇️ 2M downloads
            </p>

            <!-- PRICE -->
            <p class="price mb-2">
                <span class="text-success fw-bold">₹999</span>
                <span class="badge bg-warning text-dark">POPULAR</span>
            </p>

            <!-- DESCRIPTION -->
            <p class="desc mb-2">
                Neon-themed arcade action with vibrant visuals and fast-paced gameplay.
            </p>

            <!-- BUTTONS -->
            <div class="d-flex gap-2">
                <button class="btn btn-primary w-50">Buy</button>

                <form action="add_to_library.php" method="POST" class="w-50">
                    <input type="hidden" name="game_name" value="Neon Legends">
                    <input type="hidden" name="game_image" value="https://wallpapercave.com/wp/wp10439053.jpg">
                    <button class="btn btn-download btn-outline-light w-100">Download</button>
                </form>
            </div>

        </div>
    </div>
</div>

            <!-- 2 -->
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
    <div class="card game-card">

        <img src="https://imgs.crazygames.com/battle-arena_16x9/20260227022607/battle-arena_16x9-cover" class="card-img-top">

        <div class="card-body">

            <!-- TITLE + RATING -->
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="mb-1">Battle Arena</h6>
                <span class="rating text-info fw-bold">⭐ 3.0</span>
            </div>

            <!-- STUDIO -->
            <p class="studio mb-1">Arena Studios</p>

            <!-- TAGS -->
            <div class="tags mb-2">
                <span class="badge bg-danger">Action</span>
                <span class="badge bg-dark">Combat</span>
                <span class="badge bg-success">Multiplayer</span>
            </div>

            <!-- DETAILS -->
            <p class="small text-white-50 mb-1">
                🎮 PC, Mobile <br>
                👥 Multiplayer <br>
                📅 2025 Release
            </p>

            <!-- DOWNLOAD -->
            <p class="small text-white-50 mb-1">
                ⬇️ 1.5M downloads
            </p>

            <!-- PRICE -->
            <p class="price mb-2">
                <span class="text-success fw-bold">₹799</span>
                <span class="badge bg-warning text-dark">GOOD</span>
            </p>

            <!-- DESCRIPTION -->
            <p class="desc mb-2">
                Multiplayer arena combat with fast-paced battles and team-based gameplay.
            </p>

            <!-- BUTTONS -->
            <div class="d-flex gap-2">
                <button class="btn btn-primary w-50">Buy</button>

                <form action="add_to_library.php" method="POST" class="w-50">
                    <input type="hidden" name="game_name" value="Battle Arena">
                    <input type="hidden" name="game_image" value="https://imgs.crazygames.com/battle-arena_16x9/20260227022607/battle-arena_16x9-cover">
                    <button class="btn btn-download btn-outline-light w-100">Download</button>
                </form>
            </div>

        </div>
    </div>
</div>

            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
    <div class="card game-card">

        <img src="https://wallpapercave.com/wp/wp2041824.jpg" class="card-img-top">

        <div class="card-body">

            <!-- TITLE + RATING -->
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="mb-1">Velocity Rush</h6>
                <span class="rating text-warning fw-bold">⭐ 4.0</span>
            </div>

            <!-- STUDIO -->
            <p class="studio mb-1">SpeedX Studios</p>

            <!-- TAGS -->
            <div class="tags mb-2">
                <span class="badge bg-danger">Racing</span>
                <span class="badge bg-primary">Arcade</span>
                <span class="badge bg-success">Multiplayer</span>
            </div>

            <!-- DETAILS -->
            <p class="small text-white-50 mb-1">
                🎮 PC, Mobile <br>
                👥 Multiplayer <br>
                📅 2023 Release
            </p>

            <!-- DOWNLOAD -->
            <p class="small text-white-50 mb-1">
                ⬇️ 1M downloads
            </p>

            <!-- PRICE -->
            <p class="price mb-2">
                <span class="text-success fw-bold">₹699</span>
                <span class="badge bg-info">SALE</span>
            </p>

            <!-- DESCRIPTION -->
            <p class="desc mb-2">
                Fast-paced arcade racing with smooth gameplay and competitive modes.
            </p>

            <!-- BUTTONS -->
            <div class="d-flex gap-2">
                <!-- BUY BUTTON -->
                <button class="btn btn-primary w-50">Buy</button>

                <!-- DOWNLOAD -->
                <form action="add_to_library.php" method="POST" class="w-50">
                    <input type="hidden" name="game_name" value="Velocity Rush">
                    <input type="hidden" name="game_image" value="https://wallpapercave.com/wp/wp2041824.jpg">
                    <button class="btn btn-download btn-outline-light w-100">Download</button>
                </form>
            </div>

        </div>
    </div>
</div>

            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
    <div class="card game-card">

        <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70" class="card-img-top">

        <div class="card-body">

            <!-- TITLE + RATING -->
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="mb-1">Drift King</h6>
                <span class="rating text-info fw-bold">⭐ 3.0</span>
            </div>

            <!-- STUDIO -->
            <p class="studio mb-1">Drift Labs</p>

            <!-- TAGS -->
            <div class="tags mb-2">
                <span class="badge bg-danger">Racing</span>
                <span class="badge bg-dark">Drift</span>
                <span class="badge bg-success">Simulation</span>
            </div>

            <!-- DETAILS -->
            <p class="small text-white-50 mb-1">
                🎮 PC, Mobile <br>
                👥 Single Player <br>
                📅 2023 Release
            </p>

            <!-- DOWNLOAD -->
            <p class="small text-white-50 mb-1">
                ⬇️ 800K downloads
            </p>

            <!-- PRICE -->
            <p class="price mb-2">
                <span class="text-success fw-bold">₹599</span>
                <span class="badge bg-warning text-dark">DEAL</span>
            </p>

            <!-- DESCRIPTION -->
            <p class="desc mb-2">
                Drift-focused racing game with realistic controls and smooth handling mechanics.
            </p>

            <!-- BUTTONS -->
            <div class="d-flex gap-2">
                <!-- BUY BUTTON -->
                <button class="btn btn-primary w-50">Buy</button>

                <!-- DOWNLOAD -->
                <form action="add_to_library.php" method="POST" class="w-50">
                    <input type="hidden" name="game_name" value="Drift King">
                    <input type="hidden" name="game_image" value="https://images.unsplash.com/photo-1503376780353-7e6692767b70">
                    <button class="btn btn-download btn-outline-light w-100">Download</button>
                </form>
            </div>

        </div>
    </div>
</div>
           <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
    <div class="card game-card">

        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgZShlFZnRnYgACBsXw6XPqW64SJpyD5JswQ&s" class="card-img-top">

        <div class="card-body">

            <!-- TITLE + RATING -->
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="mb-1">Turbo Legends</h6>
                <span class="rating text-warning fw-bold">⭐ 4.0</span>
            </div>

            <!-- STUDIO -->
            <p class="studio mb-1">TurboWorks Studio</p>

            <!-- TAGS -->
            <div class="tags mb-2">
                <span class="badge bg-danger">Racing</span>
                <span class="badge bg-primary">Action</span>
                <span class="badge bg-success">Multiplayer</span>
            </div>

            <!-- DETAILS -->
            <p class="small text-white-50 mb-1">
                🎮 PC, Mobile <br>
                👥 Multiplayer <br>
                📅 2024 Release
            </p>

            <!-- DOWNLOAD -->
            <p class="small text-white-50 mb-1">
                ⬇️ 950K downloads
            </p>

            <!-- PRICE -->
            <p class="price mb-2">
                <span class="text-success fw-bold">₹749</span>
                <span class="badge bg-danger">-10%</span>
            </p>

            <!-- DESCRIPTION -->
            <p class="desc mb-2">
                Competitive racing with high-speed action, upgrades, and online battles.
            </p>

            <!-- BUTTONS -->
            <div class="d-flex gap-2">
                <!-- BUY BUTTON -->
                <button class="btn btn-primary w-50">Buy</button>

                <!-- DOWNLOAD -->
                <form action="add_to_library.php" method="POST" class="w-50">
                    <input type="hidden" name="game_name" value="Turbo Legends">
                    <input type="hidden" name="game_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgZShlFZnRnYgACBsXw6XPqW64SJpyD5JswQ&s">
                    <button class="btn btn-download btn-outline-light w-100">Download</button>
                </form>
            </div>

        </div>
    </div>
</div>

            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
    <div class="card game-card">

        <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7" class="card-img-top">

        <div class="card-body">

            <!-- TITLE + RATING -->
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="mb-1">Street Nitro</h6>
                <span class="rating text-info fw-bold">⭐ 3.0</span>
            </div>

            <!-- STUDIO -->
            <p class="studio mb-1">Nitro Street Games</p>

            <!-- TAGS -->
            <div class="tags mb-2">
                <span class="badge bg-danger">Racing</span>
                <span class="badge bg-dark">Street</span>
                <span class="badge bg-success">Multiplayer</span>
            </div>

            <!-- DETAILS -->
            <p class="small text-white-50 mb-1">
                🎮 PC, Mobile <br>
                👥 Multiplayer <br>
                📅 2023 Release
            </p>

            <!-- DOWNLOAD -->
            <p class="small text-white-50 mb-1">
                ⬇️ 700K downloads
            </p>

            <!-- PRICE -->
            <p class="price mb-2">
                <span class="text-success fw-bold">₹499</span>
                <span class="badge bg-success">BEST PRICE</span>
            </p>

            <!-- DESCRIPTION -->
            <p class="desc mb-2">
                Street racing with nitro boosts, tight corners, and competitive gameplay.
            </p>

            <!-- BUTTONS -->
            <div class="d-flex gap-2">
                <!-- BUY BUTTON -->
                <button class="btn btn-primary w-50">Buy</button>

                <!-- DOWNLOAD -->
                <form action="add_to_library.php" method="POST" class="w-50">
                    <input type="hidden" name="game_name" value="Street Nitro">
                    <input type="hidden" name="game_image" value="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7">
                    <button class="btn btn-download btn-outline-light w-100">Download</button>
                </form>
            </div>

        </div>
    </div>
</div>

            <!-- 7 -->
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
    <div class="card game-card">

        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTpeHvAQIhTZIDkdcYgOWhLvgqdmH6BcgMog&s" class="card-img-top">

        <div class="card-body">

            <!-- TITLE + RATING -->
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="mb-1">Shadow Strike</h6>
                <span class="rating text-warning fw-bold">⭐ 5.0</span>
            </div>

            <!-- STUDIO -->
            <p class="studio mb-1">Shadow Ops Studio</p>

            <!-- TAGS -->
            <div class="tags mb-2">
                <span class="badge bg-dark">Stealth</span>
                <span class="badge bg-danger">Action</span>
                <span class="badge bg-secondary">Shooter</span>
            </div>

            <!-- DETAILS -->
            <p class="small text-white-50 mb-1">
                🎮 PC, Mobile <br>
                👥 Single Player <br>
                📅 2024 Release
            </p>

            <!-- DOWNLOAD -->
            <p class="small text-white-50 mb-1">
                ⬇️ 1.3M downloads
            </p>

            <!-- PRICE -->
            <p class="price mb-2">
                <span class="text-success fw-bold">₹899</span>
                <span class="badge bg-warning text-dark">TOP RATED</span>
            </p>

            <!-- DESCRIPTION -->
            <p class="desc mb-2">
                Elite stealth missions with precision combat and immersive tactical gameplay.
            </p>

            <!-- BUTTONS -->
            <div class="d-flex gap-2">
                <!-- BUY BUTTON -->
                <button class="btn btn-primary w-50">Buy</button>

                <!-- DOWNLOAD -->
                <form action="add_to_library.php" method="POST" class="w-50">
                    <input type="hidden" name="game_name" value="Shadow Strike">
                    <input type="hidden" name="game_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTpeHvAQIhTZIDkdcYgOWhLvgqdmH6BcgMog&s">
                    <button class="btn btn-download btn-outline-light w-100">Download</button>
                </form>
            </div>

        </div>
    </div>
</div>

            <!-- 8 -->
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
    <div class="card game-card">

        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCtqJcPuuKXFD3bm91T85BvEu9pH3Vt5XJqg&s" class="card-img-top">

        <div class="card-body">

            <!-- TITLE + RATING -->
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="mb-1">Sniper Elite X</h6>
                <span class="rating text-warning fw-bold">⭐ 4.0</span>
            </div>

            <!-- STUDIO -->
            <p class="studio mb-1">Elite Warfare Studios</p>

            <!-- TAGS -->
            <div class="tags mb-2">
                <span class="badge bg-dark">Sniper</span>
                <span class="badge bg-danger">Shooter</span>
                <span class="badge bg-secondary">Tactical</span>
            </div>

            <!-- DETAILS -->
            <p class="small text-white-50 mb-1">
                🎮 PC, Mobile <br>
                👥 Single Player <br>
                📅 2024 Release
            </p>

            <!-- DOWNLOAD -->
            <p class="small text-white-50 mb-1">
                ⬇️ 1.1M downloads
            </p>

            <!-- PRICE -->
            <p class="price mb-2">
                <span class="text-success fw-bold">₹850</span>
                <span class="badge bg-warning text-dark">POPULAR</span>
            </p>

            <!-- DESCRIPTION -->
            <p class="desc mb-2">
                Precision sniper missions with realistic mechanics and tactical gameplay.
            </p>

            <!-- BUTTONS -->
            <div class="d-flex gap-2">
                <!-- BUY BUTTON -->
                <button class="btn btn-primary w-50">Buy</button>

                <!-- DOWNLOAD -->
                <form action="add_to_library.php" method="POST" class="w-50">
                    <input type="hidden" name="game_name" value="Sniper Elite X">
                    <input type="hidden" name="game_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCtqJcPuuKXFD3bm91T85BvEu9pH3Vt5XJqg&s">
                    <button class="btn btn-download btn-outline-light w-100">Download</button>
                </form>
            </div>

        </div>
    </div>
</div>

            <!-- 9 -->
           <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
    <div class="card game-card">

        <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e" class="card-img-top">

        <div class="card-body">

            <!-- TITLE + RATING -->
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="mb-1">BattleStorm</h6>
                <span class="rating text-info fw-bold">⭐ 3.0</span>
            </div>

            <!-- STUDIO -->
            <p class="studio mb-1">Storm Interactive</p>

            <!-- TAGS -->
            <div class="tags mb-2">
                <span class="badge bg-danger">Action</span>
                <span class="badge bg-dark">Battle</span>
                <span class="badge bg-secondary">Online</span>
            </div>

            <!-- DETAILS -->
            <p class="small text-white-50 mb-1">
                🎮 PC, Mobile <br>
                👥 Multiplayer <br>
                📅 2022 Release
            </p>

            <!-- DOWNLOAD -->
            <p class="small text-white-50 mb-1">
                ⬇️ 900K downloads
            </p>

            <!-- PRICE -->
            <p class="price mb-2">
                <span class="text-success fw-bold">₹720</span>
                <span class="badge bg-warning text-dark">STANDARD</span>
            </p>

            <!-- DESCRIPTION -->
            <p class="desc mb-2">
                Online battle action with competitive gameplay and evolving combat mechanics.
            </p>

            <!-- BUTTONS -->
            <div class="d-flex gap-2">
                <!-- BUY BUTTON -->
                <button class="btn btn-primary w-50">Buy</button>

                <!-- DOWNLOAD -->
                <form action="add_to_library.php" method="POST" class="w-50">
                    <input type="hidden" name="game_name" value="BattleStorm">
                    <input type="hidden" name="game_image" value="https://images.unsplash.com/photo-1542751371-adc38448a05e">
                    <button class="btn btn-download btn-outline-light w-100">Download</button>
                </form>
            </div>

        </div>
    </div>
</div>

            <!-- 10 -->
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
    <div class="card game-card">

        <img src="https://img.utdstc.com/icon/778/5bb/7785bbba733576d8d60f6a673b12593bc069853874947402ea377713bba93555:200" class="card-img-top">

        <div class="card-body">

            <!-- TITLE + RATING -->
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="mb-1">Cyber Strike</h6>
                <span class="rating text-warning fw-bold">⭐ 4.0</span>
            </div>

            <!-- STUDIO -->
            <p class="studio mb-1">CyberTech Studios</p>

            <!-- TAGS -->
            <div class="tags mb-2">
                <span class="badge bg-info">Sci-Fi</span>
                <span class="badge bg-dark">Cyberpunk</span>
                <span class="badge bg-danger">Shooter</span>
            </div>

            <!-- DETAILS -->
            <p class="small text-white-50 mb-1">
                🎮 PC, Mobile <br>
                👥 Multiplayer <br>
                📅 2024 Release
            </p>

            <!-- DOWNLOAD -->
            <p class="small text-white-50 mb-1">
                ⬇️ 950K downloads
            </p>

            <!-- PRICE -->
            <p class="price mb-2">
                <span class="text-success fw-bold">₹880</span>
                <span class="badge bg-warning text-dark">POPULAR</span>
            </p>

            <!-- DESCRIPTION -->
            <p class="desc mb-2">
                Futuristic shooter with cyberpunk visuals and intense multiplayer combat.
            </p>

            <!-- BUTTONS -->
            <div class="d-flex gap-2">
                <!-- BUY BUTTON -->
                <button class="btn btn-primary w-50">Buy</button>

                <!-- DOWNLOAD -->
                <form action="add_to_library.php" method="POST" class="w-50">
                    <input type="hidden" name="game_name" value="Cyber Strike">
                    <input type="hidden" name="game_image" value="https://img.utdstc.com/icon/778/5bb/7785bbba733576d8d60f6a673b12593bc069853874947402ea377713bba93555:200">
                    <button class="btn btn-download btn-outline-light w-100">Download</button>
                </form>
            </div>

        </div>
    </div>
</div>

        </div>
    </div>

    <!-- FOOTER -->
    <div class="footer mt-5">
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

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>