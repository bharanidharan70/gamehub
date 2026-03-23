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

    <div class="container mt-4">
        <h3 class="mb-5">🛒 Game Store</h3>

        <div class="row">



            <!-- 1 -->
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card p-2">
                    <img src="https://wallpapercave.com/wp/wp10439053.jpg">
                    <div class="card-body">
                        <h5>Neon Legends</h5>
                        <div class="text-warning">★★★★☆</div>
                        <p class="price">₹999</p>
                        <p class="small text-white-50">⬇️ 2M</p>
                        <div class="d-flex gap-2">
                            <button class="btn btn-primary w-50">Buy</button>

                            <form action="add_to_library.php" method="POST" class="w-50">
                                <input type="hidden" name="game_name" value="Neon Legends">
                                <input type="hidden" name="game_image" value="https://wallpapercave.com/wp/wp10439053.jpg">
                                <button class="btn btn-download w-100">Download</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2 -->
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card p-2">
                    <img src="https://imgs.crazygames.com/battle-arena_16x9/20260227022607/battle-arena_16x9-cover">
                    <div class="card-body">
                        <h5>Battle Arena</h5>
                        <div class="text-warning">★★★☆☆</div>
                        <p class="price">₹799</p>
                        <p class="small text-white-50">⬇️ 1.5M</p>
                        <div class="d-flex gap-2">
                            <button class="btn btn-primary w-50">Buy</button>
                            <form action="add_to_library.php" method="POST" class="w-50">
                                <input type="hidden" name="game_name" value="Battle Arena">
                                <input type="hidden" name="game_image" value="https://imgs.crazygames.com/battle-arena_16x9/20260227022607/battle-arena_16x9-cover">
                                <button class="btn btn-download w-100">Download</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3 -->
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card p-2">
                    <img src="https://wallpapercave.com/wp/wp2041824.jpg">
                    <div class="card-body">
                        <h5>Velocity Rush</h5>
                        <div class="text-warning">★★★★☆</div>
                        <p class="price">₹699</p>
                        <p class="small text-white-50">⬇️ 1M</p>
                        <div class="d-flex gap-2">
                            <button class="btn btn-primary w-50">Buy</button>
                            <form action="add_to_library.php" method="POST" class="w-50">
                                <input type="hidden" name="game_name" value="Velocity Rush">
                                <input type="hidden" name="game_image" value="https://wallpapercave.com/wp/wp2041824.jpg">
                                <button class="btn btn-download w-100">Download</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4 -->
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card p-2">
                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70">
                    <div class="card-body">
                        <h5>Drift King</h5>
                        <div class="text-warning">★★★☆☆</div>
                        <p class="price">₹599</p>
                        <p class="small text-white-50">⬇️ 800K</p>
                        <div class="d-flex gap-2">
                            <button class="btn btn-primary w-50">Buy</button>
                            <form action="add_to_library.php" method="POST" class="w-50">
                                <input type="hidden" name="game_name" value="Drift King">
                                <input type="hidden" name="game_image" value="https://images.unsplash.com/photo-1503376780353-7e6692767b70">
                                <button class="btn btn-download w-100">Download</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 5 -->
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card p-2">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgZShlFZnRnYgACBsXw6XPqW64SJpyD5JswQ&s">
                    <div class="card-body">
                        <h5>Turbo Legends</h5>
                        <div class="text-warning">★★★★☆</div>
                        <p class="price">₹749</p>
                        <p class="small text-white-50">⬇️ 950K</p>
                        <div class="d-flex gap-2">
                            <button class="btn btn-primary w-50">Buy</button>
                            <form action="add_to_library.php" method="POST" class="w-50">
                                <input type="hidden" name="game_name" value="Turbo Legends">
                                <input type="hidden" name="game_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgZShlFZnRnYgACBsXw6XPqW64SJpyD5JswQ&s">
                                <button class="btn btn-download w-100">Download</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 6 -->
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card p-2">
                    <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7">
                    <div class="card-body">
                        <h5>Street Nitro</h5>
                        <div class="text-warning">★★★☆☆</div>
                        <p class="price">₹499</p>
                        <p class="small text-white-50">⬇️ 700K</p>
                        <div class="d-flex gap-2">
                            <button class="btn btn-primary w-50">Buy</button>
                            <form action="add_to_library.php" method="POST" class="w-50">
                                <input type="hidden" name="game_name" value="Street Nitro">
                                <input type="hidden" name="game_image" value="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7">
                                <button class="btn btn-download w-100">Download</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 7 -->
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card p-2">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTpeHvAQIhTZIDkdcYgOWhLvgqdmH6BcgMog&s">
                    <div class="card-body">
                        <h5>Shadow Strike</h5>
                        <div class="text-warning">★★★★★</div>
                        <p class="price">₹899</p>
                        <p class="small text-white-50">⬇️ 1.3M</p>
                        <div class="d-flex gap-2">
                            <button class="btn btn-primary w-50">Buy</button>
                            <form action="add_to_library.php" method="POST" class="w-50">
                                <input type="hidden" name="game_name" value="Shadow Strike">
                                <input type="hidden" name="game_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTpeHvAQIhTZIDkdcYgOWhLvgqdmH6BcgMog&s">
                                <button class="btn btn-download w-100">Download</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 8 -->
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card p-2">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCtqJcPuuKXFD3bm91T85BvEu9pH3Vt5XJqg&s">
                    <div class="card-body">
                        <h5>Sniper Elite X</h5>
                        <div class="text-warning">★★★★☆</div>
                        <p class="price">₹850</p>
                        <p class="small text-white-50">⬇️ 1.1M</p>
                        <div class="d-flex gap-2">
                            <button class="btn btn-primary w-50">Buy</button>
                            <form action="add_to_library.php" method="POST" class="w-50">
                                <input type="hidden" name="game_name" value="Sniper Elite X">
                                <input type="hidden" name="game_image" value="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCtqJcPuuKXFD3bm91T85BvEu9pH3Vt5XJqg&s">
                                <button class="btn btn-download w-100">Download</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 9 -->
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card p-2">
                    <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e">
                    <div class="card-body">
                        <h5>BattleStorm</h5>
                        <div class="text-warning">★★★☆☆</div>
                        <p class="price">₹720</p>
                        <p class="small text-white-50">⬇️ 900K</p>
                        <div class="d-flex gap-2">
                            <button class="btn btn-primary w-50">Buy</button>
                            <form action="add_to_library.php" method="POST" class="w-50">
                                <input type="hidden" name="game_name" value="BattleStorm">
                                <input type="hidden" name="game_image" value="https://images.unsplash.com/photo-1542751371-adc38448a05e">
                                <button class="btn btn-download w-100">Download</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 10 -->
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card p-2">
                    <img src="https://img.utdstc.com/icon/778/5bb/7785bbba733576d8d60f6a673b12593bc069853874947402ea377713bba93555:200">
                    <div class="card-body">
                        <h5>Cyber Strike</h5>
                        <div class="text-warning">★★★★☆</div>
                        <p class="price">₹880</p>
                        <p class="small text-white-50">⬇️ 950K</p>
                        <div class="d-flex gap-2">
                            <button class="btn btn-primary w-50">Buy</button>
                            <form action="add_to_library.php" method="POST" class="w-50">
                                <input type="hidden" name="game_name" value="Cyber Strike">
                                <input type="hidden" name="game_image" value="https://img.utdstc.com/icon/778/5bb/7785bbba733576d8d60f6a673b12593bc069853874947402ea377713bba93555:200">
                                <button class="btn btn-download w-100">Download</button>
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