<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB1SALSACAMELIA</title>
    <link rel="stylesheet" href="assets/css/main.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        /* Style untuk menengahkan gambar dan teks di bawahnya */
        #banner {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .content {
            max-width: 600px;
            /* Sesuaikan dengan lebar maksimum teks */
            margin: 0 auto;
        }

        .image {
            margin-bottom: 20px;
            /* Sesuaikan dengan jarak antara gambar dan teks */
        }

        img {
            max-width: 500px;
            height: auto;
        }
    </style>
</head>

<body>
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LES ONLINE BAHASA INGGRIS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end Nav Bar -->

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <div id="main">
            <div class="inner">

                <!-- Banner -->
                <section id="banner">
                    <span class="image object">
                        <img src="images/quis2.png" alt="" />
                    </span>
                    <div class="content">
                        <header>
                            <h1>QUIS</h1>
                        </header>
                        <p>
                            Quis pada les online Bahasa Inggris adalah alat evaluasi yang digunakan untuk mengukur
                            pemahaman dan kemampuan siswa dalam memahami materi pelajaran. Dalam sesi kuis, peserta
                            didik akan dihadapkan pada serangkaian pertanyaan yang mencakup berbagai aspek pembelajaran,
                            seperti kosakata, tata bahasa, pemahaman bacaan, dan keterampilan mendengarkan. Tujuan
                            utamanya adalah mengukur sejauh mana siswa telah menyerap informasi dan keterampilan yang
                            diajarkan selama proses belajar online. Quis ini tidak hanya sebagai alat penilaian, tetapi
                            juga sebagai sarana untuk memotivasi siswa dalam meningkatkan prestasi mereka dalam memahami
                            dan menguasai Bahasa Inggris secara menyeluruh.
                        </p>
                    </div>
                </section>

            </div>
        </div>

    </div>
    </div>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>