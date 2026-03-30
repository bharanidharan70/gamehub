<?php
session_start();
include("db.php");

// 🔐 admin check
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header("Location:index.php");
    exit();
}

$id = $_GET['id'];

// fetch user
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$user = $result->fetch_assoc();

// update logic
if (isset($_POST['update'])) {

    $gamer_tag = $_POST['gamer_tag'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $favorite_game = $_POST['favorite_game'];
    $gamer_level = $_POST['gamerLevel'];

    // password update optional
    if (!empty($_POST['password'])) {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $conn->query("UPDATE users SET 
            gamer_tag='$gamer_tag',
            email='$email',
            password='$password',
            dob='$dob',
            gender='$gender',
            country='$country',
            favorite_game='$favorite_game',
            gamer_level='$gamer_level'
            WHERE id=$id");
    } else {
        $conn->query("UPDATE users SET 
            gamer_tag='$gamer_tag',
            email='$email',
            dob='$dob',
            gender='$gender',
            country='$country',
            favorite_game='$favorite_game',
            gamer_level='$gamer_level'
            WHERE id=$id");
    }

    header("Location: admin.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit User</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #0f172a;
            color: white;
        }

        .card-box {
            background: #1e293b;
            padding: 30px;
            border-radius: 12px;
        }
    </style>

</head>

<body>

    <div class="container mt-5">
        <div class="card-box">

            <h3 class="mb-4">✏️ Admin Edit User</h3>

            <form method="POST">

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label>Gamer Tag</label>
                        <input type="text" name="gamer_tag" class="form-control"
                            value="<?= $user['gamer_tag'] ?>">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control"
                            value="<?= $user['email'] ?>">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>New Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Date of Birth</label>
                        <input type="date" name="dob" class="form-control"
                            value="<?= $user['dob'] ?>">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Gender</label>
                        <select name="gender" class="form-select">
                            <option <?= ($user['gender'] == 'Male') ? 'selected' : '' ?>>Male</option>
                            <option <?= ($user['gender'] == 'Female') ? 'selected' : '' ?>>Female</option>
                            <option <?= ($user['gender'] == 'Others') ? 'selected' : '' ?>>Others</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Country</label>
                        <input type="text" name="country" class="form-control"
                            value="<?= $user['country'] ?>">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Favorite Game</label>
                        <input type="text" name="favorite_game" class="form-control"
                            value="<?= $user['favorite_game'] ?>">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Gamer Level</label><br>

                        <?php $level = isset($user['gamer_level']) ? trim($user['gamer_level']) : ''; ?>

                        <input type="radio" name="gamerLevel" value="Beginner"
                            <?= ($level == 'Beginner') ? 'checked' : '' ?>> Beginner

                        <input type="radio" name="gamerLevel" value="Intermediate"
                            <?= ($level == 'Intermediate') ? 'checked' : '' ?>> Intermediate

                        <input type="radio" name="gamerLevel" value="Pro"
                            <?= ($level == 'Pro') ? 'checked' : '' ?>> Pro

                    </div>

                    <div class="col-md-12 mt-3">
                        <button name="update" class="btn btn-success w-100">Update User</button>
                    </div>

                    <div class="col-md-12 mt-3 text-center">
                        <a href="admin.php" class="btn btn-secondary">⬅ Back</a>
                    </div>

                </div>

            </form>

        </div>
    </div>

</body>

</html>