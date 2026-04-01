<?php
session_start();
include("db.php");

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header("Location:index.php");
    exit();
}

$result = $conn->query("SELECT * FROM users");

// total users
$total = $conn->query("SELECT COUNT(*) as count FROM users");
$data = $total->fetch_assoc();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <!-- jQuery FIRST -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <style>
        body {
            background: #0f172a;
            color: white;
        }

        .card-box {
            background: #1e293b;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
        }

        .table {
            background: white;
        }

        /* 🔥 spacing */
        .dataTables_wrapper {
            margin-top: 20px;
        }

        .dataTables_length,
        .dataTables_filter {
            margin-bottom: 15px;
        }

        /* dropdown + search */
        .dataTables_length select,
        .dataTables_filter input {
            background: white;
            color: black;
            border-radius: 6px;
            padding: 5px;
        }

        /* pagination container */
        .dataTables_paginate {
            margin-top: 20px;
        }

        /* pagination buttons */
        .dataTables_paginate .paginate_button {
            background: #1e293b !important;
            color: white !important;
            border: none !important;
            padding: 6px 12px;
            margin: 3px;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none !important;
        }

        /* active page */
        .dataTables_paginate .paginate_button.current {
            background: #9333ea !important;
        }

        /* hover */
        .dataTables_paginate .paginate_button:hover {
            background: #4c1d95 !important;
            color: white !important;
        }

        /* info text */
        .dataTables_info {
            margin-top: 10px;
        }

        /* remove sort arrows */
        table.dataTable thead .sorting,
        table.dataTable thead .sorting_asc,
        table.dataTable thead .sorting_desc {
            background-image: none !important;
        }
    </style>

</head>

<body>

    <div class="container mt-5">

        <h2 class="mb-4">👑 Admin Dashboard</h2>

        <!-- total users -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card-box">
                    <h5>Total Users</h5>
                    <h2><?= $data['count'] ?></h2>
                </div>
            </div>
        </div>

        <!-- sort dropdown -->
        <div class="mb-3">
            <label>Sort By:</label>
            <select id="sortOption" class="form-select w-auto d-inline ms-2">
                <option value="">Default</option>
                <option value="id_asc">ID ↑</option>
                <option value="id_desc">ID ↓</option>
                <option value="name_asc">Name A-Z</option>
                <option value="name_desc">Name Z-A</option>
            </select>
        </div>

        <!-- table -->
        <table id="table" class="table table-hover table-bordered text-center align-middle">

            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>

                        <td><?= $row['id'] ?></td>
                        <td><?= $row['gamer_tag'] ?></td>
                        <td><?= $row['email'] ?></td>

                        <td>
                            <?php if ($row['role'] == 'admin'): ?>
                                <span class="badge bg-warning text-dark">Admin</span>
                            <?php else: ?>
                                <span class="badge bg-secondary">User</span>
                            <?php endif; ?>
                        </td>

                        <td>
                            <?php if (isset($row['status']) && $row['status'] == 'blocked'): ?>
                                <span class="badge bg-danger">Blocked</span>
                            <?php else: ?>
                                <span class="badge bg-success">Active</span>
                            <?php endif; ?>
                        </td>

                        <td>
                            <a href="edit_user.php?id=<?= $row['id'] ?>" class="btn btn-primary btn-sm">Edit</a>

                            <?php if ($row['role'] != 'admin'): ?>
                                <a href="delete_user.php?id=<?= $row['id'] ?>"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete user?')">Delete</a>
                            <?php endif; ?>

                            <a href="block_user.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">
                                <?= ($row['status'] == 'blocked') ? 'Unblock' : 'Block' ?>
                            </a>
                        </td>

                    </tr>
                <?php endwhile; ?>
            </tbody>

        </table>

        <!-- back -->
        <div class="text-center mt-5 mb-5">
            <a href="index.php" class="btn btn-success px-4 py-2">
                ⬅ Back to Home
            </a>
        </div>

    </div>



    <script>
        $(function() {

            let table = $('#table').DataTable({
                pagingType: "full_numbers",
                pageLength: 5,
                order: []
            });

            // dropdown sort
            $('#sortOption').change(function() {

                let v = $(this).val();

                if (v == "id_asc") table.order([0, 'asc']).draw();
                else if (v == "id_desc") table.order([0, 'desc']).draw();
                else if (v == "name_asc") table.order([1, 'asc']).draw();
                else if (v == "name_desc") table.order([1, 'desc']).draw();
                else table.order([]).draw();

            });

        });
    </script>

</body>

</html>