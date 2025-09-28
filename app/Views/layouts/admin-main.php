<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>School Management Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            min-height: 100vh;
            background-color: #343a40;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #495057;
            border-radius: 0.375rem;
        }

        .content {
            padding: 20px;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block sidebar p-3">
                <h4 class="text-white mb-4"><i class="bi bi-mortarboard-fill"></i> School</h4>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a class="nav-link text-white" href="#"><i class="bi bi-speedometer2"></i> Dashboard</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link text-white" href="#"><i class="bi bi-people"></i> Students</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link text-white" href="#"><i class="bi bi-person-badge"></i> Teachers</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link text-white" href="#"><i class="bi bi-book"></i> Classes</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link text-white" href="#"><i class="bi bi-cash-stack"></i> Fees</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link text-white" href="#"><i class="bi bi-gear"></i> Settings</a>
                    </li>
                </ul>
            </nav>

            <!-- Main Content -->
            <main class="col-md-10 ms-sm-auto col-lg-10 content">
                <?= $content ?? '' ?>

            </main>
        </div>
    </div>

    <!-- ✅ Bootstrap 5 JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>