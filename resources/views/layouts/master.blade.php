<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem E-Bengkel</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            background-color: #f0f4f8; /* Warna latar belakang lembut */
        }
        .navbar {
            background-color: #212529 !important;
            box-shadow: 0 2px 4px rgba(0,0,0,.1);
        }
        .main-card {
            background-color: #d1f3ff; /* Warna biru muda sesuai gambar */
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 40px;
            margin-top: 30px;
        }
        .welcome-title {
            color: #0d2a4d;
            font-weight: 800;
        }
        .table-container {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            margin-top: 20px;
        }
        .btn-add {
            background-color: #20c997;
            border: none;
            border-radius: 30px;
            padding: 10px 20px;
            font-weight: bold;
        }
        .btn-add:hover { background-color: #1aa179; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">Sistem E-Bengkel</a>
            <div class="ms-auto">
                <a class="nav-link text-white-50" href="/">Daftar Servis</a>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer class="text-center mt-5 py-4 text-muted">
        <hr style="width: 50%; margin: auto;">
        <p class="mt-3">E-Bengkel © 2026</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>