<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>GameHub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #0b1120;
            color: white;
            margin: 0;
            padding: 0;
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

            padding: 80px 40px;
            background-image: url("images/3d-fantasy-scene.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
        }

        .hero h1 {
            font-size: 50px;
            font-weight: bold;
        }

        .hero p {
            color: #aaa;
        }

        .btn-main {
            background: #9333ea;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            margin-right: 10px;
        }

        /* SECTION */
        .section-title {
            margin: 50px 0 20px;
            font-weight: bold;
        }

        /* CARD */
        .card {
            background: #1e293b;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: 0.3s;
            color: white;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }


        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }


        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            height: 180px;
            object-fit: cover;
        }

        .btn-play {
            background: #9333ea;
            border: none;
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

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">

            <a class="navbar-brand">🎮 GameHub</a>

            <!-- 🔥 HAMBURGER BUTTON -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- MENU -->
            <div class="collapse navbar-collapse" id="navMenu">

                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="library.php">Library</a></li>
                    <li class="nav-item"><a class="nav-link" href="store.php">Store</a></li>
                    <li class="nav-item"><a class="nav-link" href="community.php">Community</a></li>
                </ul>

                <div class="text-center mt-2 mt-lg-0">
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

    <!-- HERO -->
    <section class="hero">
        <h1>Neon Legends</h1>
        <p>Experience the ultimate cyberpunk adventure in a neon-lit world.</p>
        <button class="btn btn-main">Play Now</button>
        <button class="btn btn-light">Learn More</button>
    </section>

    <div class="container mt-4">
        <div class="p-4 rounded" style="background: linear-gradient(90deg,#9333ea,#3b82f6);">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h2>🔥 Mega Gaming Sale</h2>
                    <p>Up to 70% OFF on top games. Limited time offer!</p>
                    <a href="store.php" class="btn btn-light">Shop Now</a>
                </div>
                <div class="col-md-4 text-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/833/833314.png" width="120">
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <!-- TRENDING -->
        <h3 class="section-title">🔥 Trending Games</h3>
        <div class="row">

            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card">
                    <img src="https://wallpapercave.com/wp/wp10439053.jpg">
                    <div class="card-body">
                        <h5>Neon Legends</h5>
                        <p>⭐⭐⭐⭐⭐ (5.0)</p>

                        <p class="small text-white-50">
                            🎮 Action <br>
                            ⬇️ 6M downloads
                        </p>

                        <div class="d-flex gap-2">
                            <button class="btn btn-play w-50">Play</button>
                            <form action="add_to_library.php" method="POST" class="w-50">
                                <input type="hidden" name="game_name" value="Neon Legends">
                                <input type="hidden" name="game_image" value="https://wallpapercave.com/wp/wp10439053.jpg">
                                <button class="btn btn-download btn-outline-light w-100">Download</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card">
                    <img src="https://img.freepik.com/premium-photo/call-duty-mobile-hd-art-full-wallpaper-collection-soldier-standing-front-fire-filled-sky_116317-37689.jpg">
                    <div class="card-body">
                        <h5>War Zone</h5>
                        <p>⭐⭐⭐⭐ (4.8)</p>

                        <p class="small text-white-50">
                            🎮 Action <br>
                            ⬇️ 2M downloads
                        </p>

                        <div class="d-flex gap-2">
                            <button class="btn btn-play w-50">Play</button>
                            <form action="add_to_library.php" method="POST" class="w-50">
                                <input type="hidden" name="game_name" value="War Zone">
                                <input type="hidden" name="game_image" value="https://img.freepik.com/premium-photo/call-duty-mobile-hd-art-full-wallpaper-collection-soldier-standing-front-fire-filled-sky_116317-37689.jpg">
                                <button class="btn btn-download btn-outline-light w-100">Download</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card">
                    <img src="https://wallpapercave.com/wp/wp2041824.jpg">
                    <div class="card-body">
                        <h5>Velocity Rush</h5>
                        <p>⭐⭐ (2.9)</p>

                        <p class="small text-white-50">
                            🎮 Action <br>
                            ⬇️ 1M downloads
                        </p>

                        <div class="d-flex gap-2">
                            <button class="btn btn-play w-50">Play</button>
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
                <div class="card">
                    <img src="https://imgs.crazygames.com/battle-arena_16x9/20260227022607/battle-arena_16x9-cover">
                    <div class="card-body">
                        <h5>Battle Arena</h5>
                        <p>⭐⭐⭐⭐ (4.8)</p>

                        <p class="small text-white-50">
                            🎮 Action <br>
                            ⬇️ 2M downloads
                        </p>

                        <div class="d-flex gap-2">
                            <button class="btn btn-play w-50">Play</button>
                            <form action="add_to_library.php" method="POST" class="w-50">
                                <input type="hidden" name="game_name" value="Battle Arena">
                                <input type="hidden" name="game_image" value="https://imgs.crazygames.com/battle-arena_16x9/20260227022607/battle-arena_16x9-cover">
                                <button class="btn btn-download btn-outline-light w-100">Download</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container mt-5">
                <h3 class="mb-4">🎁 Special Offers</h3>

                <div class="row">

                    <div class="col-md-4 mb-4">
                        <div class="card p-3 text-center">
                            <h5>💥 50% OFF</h5>
                            <p>On all racing games</p>
                            <button class="btn btn-primary">Explore</button>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card p-3 text-center">
                            <h5>🔥 Buy 1 Get 1</h5>
                            <p>Battle games special deal</p>
                            <button class="btn btn-success">Grab Now</button>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card p-3 text-center">
                            <h5>⚡ Flash Sale</h5>
                            <p>Ends in 2 hours</p>
                            <button class="btn btn-danger">Hurry Up</button>
                        </div>
                    </div>

                </div>
            </div>
            <!-- RACING -->
            <h3 class="section-title">🏎️ Racing Games</h3>
            <div class="row">

                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card">
                        <img src="https://wallpapercave.com/wp/wp2041824.jpg">
                        <div class="card-body">
                            <h5>Speed Racer</h5>
                            <p>⭐⭐⭐⭐⭐ (5.0)</p>

                            <p class="small text-white-50">
                                🎮 Action <br>
                                ⬇️ 5M downloads
                            </p>

                            <div class="d-flex gap-2">
                                <button class="btn btn-play w-50">Play</button>
                                <form action="add_to_library.php" method="POST" class="w-50">
                                    <input type="hidden" name="game_name" value="Speed Racer">
                                    <input type="hidden" name="game_image" value="https://wallpapercave.com/wp/wp2041824.jpg">
                                    <button class="btn btn-download btn-outline-light w-100">Download</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70">
                        <div class="card-body">
                            <h5>Drift King</h5>
                            <p>⭐⭐⭐⭐ (4.8)</p>

                            <p class="small text-white-50">
                                🎮 Action <br>
                                ⬇️ 2M downloads
                            </p>

                            <div class="d-flex gap-2">
                                <button class="btn btn-play w-50">Play</button>
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
                    <div class="card">
                        <img src="https://wallpapercave.com/wp/wp2041824.jpg">
                        <div class="card-body">
                            <h5>Velocity Rush</h5>
                            <p>⭐⭐⭐ (3.5)</p>

                            <p class="small text-white-50">
                                🎮 Action <br>
                                ⬇️ 1.6M downloads
                            </p>

                            <div class="d-flex gap-2">
                                <button class="btn btn-play w-50">Play</button>
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
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgZShlFZnRnYgACBsXw6XPqW64SJpyD5JswQ&s">
                        <div class="card-body">
                            <h5>Turbo Legends</h5>
                            <p>⭐⭐⭐⭐ (4.5)</p>

                            <p class="small text-white-50">
                                🎮 Action <br>
                                ⬇️ 1.5M downloads
                            </p>

                            <div class="d-flex gap-2">
                                <button class="btn btn-play w-50">Play</button>
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
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7">
                        <div class="card-body">
                            <h5>Street Nitro</h5>
                            <p>⭐⭐⭐⭐ (4)</p>

                            <p class="small text-white-50">
                                🎮 Action <br>
                                ⬇️ 1.5M downloads
                            </p>

                            <div class="d-flex gap-2">
                                <button class="btn btn-play w-50">Play</button>
                                <form action="add_to_library.php" method="POST" class="w-50">
                                    <input type="hidden" name="game_name" value="Street Nitro">
                                    <input type="hidden" name="game_image" value="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7">
                                    <button class="btn btn-download btn-outline-light w-100">Download</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- BATTLE -->
            <h3 class="section-title">⚔️ Battle Games</h3>
            <div class="row">

                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card">
                        <img src="https://imgs.crazygames.com/battle-arena_16x9/20260227022607/battle-arena_16x9-cover">
                        <div class="card-body">
                            <h5>War Arena</h5>
                            <p>⭐⭐⭐⭐ (4.9)</p>

                            <p class="small text-white-50">
                                🎮 Action <br>
                                ⬇️ 3M downloads
                            </p>

                            <div class="d-flex gap-2">
                                <button class="btn btn-play w-50">Play</button>
                                <form action="add_to_library.php" method="POST" class="w-50">
                                    <input type="hidden" name="game_name" value="War Arena">
                                    <input type="hidden" name="game_image" value="https://imgs.crazygames.com/battle-arena_16x9/20260227022607/battle-arena_16x9-cover">
                                    <button class="btn btn-download btn-outline-light w-100">Download</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTpeHvAQIhTZIDkdcYgOWhLvgqdmH6BcgMog&s">
                        <div class="card-body">
                            <h5>Shadow Strike</h5>
                            <p>⭐⭐⭐ (3)</p>

                            <p class="small text-white-50">
                                🎮 Action <br>
                                ⬇️ 2M downloads
                            </p>

                            <div class="d-flex gap-2">
                                <button class="btn btn-play w-50">Play</button>
                                <form action="add_to_library.php" method="POST" class="w-50">
                                    <input type="hidden" name="game_name" value="Shadow Strike">
                                    <input type="hidden" name="game_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTpeHvAQIhTZIDkdcYgOWhLvgqdmH6BcgMog&s">
                                    <button class="btn btn-download btn-outline-light w-100">Download</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCtqJcPuuKXFD3bm91T85BvEu9pH3Vt5XJqg&s">
                        <div class="card-body">
                            <h5>Sniper Elite X</h5>
                            <p>⭐⭐⭐⭐ (4.8)</p>

                            <p class="small text-white-50">
                                🎮 Action <br>
                                ⬇️ 2M downloads
                            </p>

                            <div class="d-flex gap-2">
                                <button class="btn btn-play w-50">Play</button>
                                <form action="add_to_library.php" method="POST" class="w-50">
                                    <input type="hidden" name="game_name" value="Sniper Elite X">
                                    <input type="hidden" name="game_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCtqJcPuuKXFD3bm91T85BvEu9pH3Vt5XJqg&s">
                                    <button class="btn btn-download btn-outline-light w-100">Download</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e">
                        <div class="card-body">
                            <h5>BattleStorm</h5>
                            <p>⭐⭐ (2.5)</p>

                            <p class="small text-white-50">
                                🎮 Action <br>
                                ⬇️ 500k downloads
                            </p>

                            <div class="d-flex gap-2">
                                <button class="btn btn-play w-50">Play</button>
                                <form action="add_to_library.php" method="POST" class="w-50">
                                    <input type="hidden" name="game_name" value="BattleStorm">
                                    <input type="hidden" name="game_image" value="https://images.unsplash.com/photo-1542751371-adc38448a05e">
                                    <button class="btn btn-download btn-outline-light w-100">Download</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <h3 class="section-title">🎯 Shooting Games</h3>
            <div class="row">

                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyHrEveSAunE2NO_3w8tM2jjFOd79KNfFymg&s">
                        <div class="card-body">
                            <h5>Sniper Fury</h5>
                            <p>⭐⭐⭐ (3)</p>

                            <p class="small text-white-50">
                                🎮 Action <br>
                                ⬇️ 1M downloads
                            </p>

                            <div class="d-flex gap-2">
                                <button class="btn btn-play w-50">Play</button>
                                <form action="add_to_library.php" method="POST" class="w-50">
                                    <input type="hidden" name="game_name" value="Sniper Fury">
                                    <input type="hidden" name="game_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyHrEveSAunE2NO_3w8tM2jjFOd79KNfFymg&s">
                                    <button class="btn btn-download btn-outline-light w-100">Download</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card">
                        <img src="https://i.ytimg.com/vi/eCehDd2VKWo/maxresdefault.jpg">
                        <div class="card-body">
                            <h5>Bullet Strike</h5>
                            <p>⭐⭐⭐⭐ (4)</p>

                            <p class="small text-white-50">
                                🎮 Action <br>
                                ⬇️ 1.5M downloads
                            </p>

                            <div class="d-flex gap-2">
                                <button class="btn btn-play w-50">Play</button>
                                <form action="add_to_library.php" method="POST" class="w-50">
                                    <input type="hidden" name="game_name" value="Bullet Strike">
                                    <input type="hidden" name="game_image" value="https://i.ytimg.com/vi/eCehDd2VKWo/maxresdefault.jpg">
                                    <button class="btn btn-download btn-outline-light w-100">Download</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card">
                        <img src="https://upload.wikimedia.org/wikipedia/en/1/13/First_edition_of_Empire_Builder_1982.jpg">
                        <div class="card-body">
                            <h5>Empire Builder</h5>
                            <p>⭐⭐⭐⭐ (4.9)</p>

                            <p class="small text-white-50">
                                🎮 Action <br>
                                ⬇️ 1M downloads
                            </p>

                            <div class="d-flex gap-2">
                                <button class="btn btn-play w-50">Play</button>
                                <form action="add_to_library.php" method="POST" class="w-50">
                                    <input type="hidden" name="game_name" value="Empire Builder">
                                    <input type="hidden" name="game_image" value="https://upload.wikimedia.org/wikipedia/en/1/13/First_edition_of_Empire_Builder_1982.jpg">
                                    <button class="btn btn-download btn-outline-light w-100">Download</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnWRkuVHkB7nJwMNlRrUJV8BkJO0Hhj9Ooxw&s">
                        <div class="card-body">
                            <h5>War Tactics</h5>
                            <p>⭐⭐⭐ (3.5)</p>

                            <p class="small text-white-50">
                                🎮 Action <br>
                                ⬇️ 1.5M downloads
                            </p>

                            <div class="d-flex gap-2">
                                <button class="btn btn-play w-50">Play</button>
                                <form action="add_to_library.php" method="POST" class="w-50">
                                    <input type="hidden" name="game_name" value="War Tactics">
                                    <input type="hidden" name="game_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnWRkuVHkB7nJwMNlRrUJV8BkJO0Hhj9Ooxw&s">
                                    <button class="btn btn-download btn-outline-light w-100">Download</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="container mt-5">
        <h3 class="mb-4">🏆 Featured Games</h3>

        <div class="row">

            <div class="col-md-6 mb-4">
                <div class="card p-3">
                    <h4>Neon Legends</h4>
                    <p>Cyberpunk action adventure</p>
                    <button class="btn btn-primary">Play Now</button>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card p-3">
                    <h4>Battle Arena</h4>
                    <p>Ultimate multiplayer war game</p>
                    <button class="btn btn-success">Play Now</button>
                </div>
            </div>

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
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>