<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Seminar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS untuk menambahkan gaya tambahan */
        .hero {
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .hero h1 {
            font-size: 4rem;
            font-weight: bold;
            color: #F6EFBD;
        }

        .hero p {
            font-size: 1.5rem;
        }

        .button-group a {
            width: 150px;
            margin: 0 10px;
        }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <section class="hero p-3 mb-2 text-white" style ="background-color: #A2D2DF;">
        <div class="container">
            <h1>Selamat Datang di Seminar 2024</h1>
            <p>Daftar sekarang untuk mengikuti seminar menarik dan tingkatkan pengetahuan Anda!</p>
            <div class="button-group mt-4">
                <a href="tambah.php" class="btn text-light btn-lg" style="background-color: #E4C087;">Daftar</a>
                <a href="loginAdmin.php" class="btn text-light btn-lg" style="background-color: #BC7C7C;">Admin</a>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
