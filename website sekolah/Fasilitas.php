<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas Sekolah</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="favicon.ico">
    <style>

        * {
            font-family: 'Afacad Flux', sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 90%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #35424a;
            color: #ffffff;
            padding: 10px 0;
            text-align: center;
        }
        .facilities {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0;
        }
        .facility {
            background: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 5px;
            flex: 1 1 30%; /* Flex basis untuk kolom */
            margin: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        .facility img {
            width: 100%;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .facility h3 {
            padding: 10px;
            text-align: center;
        }
        .facility p {
            padding: 0 10px 10px;
            text-align: justify;
        }
        .facility:hover {
            transform: scale(1.05);
        }
        @media (max-width: 768px) {
            .facility {
                flex: 1 1 100%; /* Menjadi satu kolom pada layar kecil */
            }
        }
    </style>
</head>
<body>
    <?php include "layout/navbar.html"?>
    <header>
        <h1>Fasilitas Sekolah</h1>
    </header>
    <div class="container">
        <div class="facilities">
            <div class="facility">
                <img src="https://via.placeholder.com/300x200" alt="Ruang Kelas">
                <h3>Ruang Kelas</h3>
                <p>Ruang kelas yang nyaman dan dilengkapi dengan teknologi modern untuk mendukung proses belajar mengajar.</p>
            </div>
            <div class="facility">
                <img src="https://via.placeholder.com/300x200" alt="Perpustakaan">
                <h3>Perpustakaan</h3>
                <p>Perpustakaan yang luas dengan koleksi buku yang lengkap untuk mendukung kebutuhan akademik siswa.</p>
            </div>
            <div class="facility">
                <img src="https://via.placeholder.com/300x200" alt="Laboratorium">
                <h3>Laboratorium</h3>
                <p>Laboratorium sains dan komputer yang dilengkapi dengan peralatan terbaru untuk eksperimen dan pembelajaran praktis.</p>
            </div>
        </div>
    </div>
</body>
</html>