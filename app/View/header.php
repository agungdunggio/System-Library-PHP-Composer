<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $model['title'] ?? 'System Library' ?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./../../public/style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-primary text-light sidebar">
                <div class="position-sticky">
                    <h4 class="pt-3 text-center">Admin Panel</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#dashboard">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#users">
                                Pengguna
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#settings">
                                Pengaturan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#reports">
                                Laporan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#logout">
                                Keluar
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>