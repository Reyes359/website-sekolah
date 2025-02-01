<?php

    
?>



<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tantangan Soal Event</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="favicon.ico">
</head>
<body>
    <style>
        * {
            font-family: 'Afacad Flux', sans-serif;
        }
        body {
            background-image: url("img/Desain tanpa judul.svg");
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background: #007BFF;
    color: white;
    text-align: center;
    padding: 20px;
}

.event-details, .registration {
    background: white;
    margin: 20px;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

h2 {
    color: #007BFF;
}

.gform {
    list-style-type: none;
    color: #007BFF;
    font-size: 21px;
    margin-bottom: 8px;
    text-decoration: none;
}

.gform:hover {
    width: 260px;
    height: 30px;
    color: black;
    text-decoration: none;
    transition: color 0.2s ease-in-out;
    background: #f4f4f4;
    transition: background 0.2s ease-in-out;
    transition: box-shadow 0.2s ease-in-out;
}

ul {
    list-style-type: none;
    padding: 0;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin: 10px 0 5px;
}

input {
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 10px;
    background: #007BFF;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background: #0056b3;
}

footer {
    text-align: center;
    padding: 10px;
    background: #007BFF;
    color: white;
    position: relative;
    bottom: 0;
    width: 100%;
}

nav {
            display: flex;
            align-items: center; /* Menyelaraskan logo dan tautan secara vertikal */
            background: linear-gradient(135deg, #ff4081, #ffab40); /* Latar belakang gradien */
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }
        .logo {
            margin-right: 20px; /* Jarak antara logo dan tautan */
        }
        .logo img {
            height: 50px; /* Tinggi logo */
        }
        .nav-links {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        .nav-links li {
            margin: 0 15px;
        }
        .nav-links a {
            text-decoration: none;
            color: #fff; /* Warna teks */
            font-weight: bold;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s, transform 0.3s; /* Menambahkan transisi untuk transform */
        }
        .nav-links a:hover {
            background-color: #fff; /* Warna latar belakang saat hover */
            color: #ff4081; /* Warna teks saat hover */
            transform: scale(1.1); /* Efek skala saat hover */
        }
    </style>

<nav>
    <div class="logo">
        <img src="img/images-removebg-preview.png" alt="Logo Ujian Sekolah"> <!-- Ganti 'logo.png' dengan path logo Anda -->
    </div>
    <ul class="nav-links">
        <li><a href="home.php">Beranda</a></li>
        <li><a href="event.php">Event</a></li>
        <li><a href="team.php">Tentang Kami</a></li>
        <li><a href="Fasilitas.php">Fasilitas</a></li>
        <li><a href="#">Bantuan</a></li>
        <li><a href="dewanGuru.php">Staff Dewan Guru</a></li>
    </ul>
</nav>
    <header>
        <h1>Tantangan Soal 2023</h1>
        <p>Uji kemampuanmu dan menangkan hadiah menarik!</p>
    </header>

    <section class="event-details">
        <h2>Detail Acara</h2>
        <ul>
            <li><strong>Tanggal:</strong> 15 November 2024</li>
            <li><strong>Waktu:</strong> 10:00 - 14:00 WIB</li>
            <li><strong>Tempat:</strong> Di ruangan Kelas masing-masing</li>
            <li><strong>Hadiah:</strong> Sertifikat dan hadiah menarik lainnya!</li>
        </ul>
    </section>

    <section class="registration">
        <h2>Pendaftaran Data Diri</h2>
        <form>
            <a href="" class="gform"><li>Link Google Form</li></a>
            <button type="button" onclick="window.location.href='register.php'">Daftar Sekarang</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Tantangan Soal. Semua hak dilindungi oleh SMPN 4 Genteng.</p>
    </footer>
</body>
</html>