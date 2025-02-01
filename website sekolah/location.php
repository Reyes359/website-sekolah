<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="favicon.ico">
</head>
<body>
    <style>
      body {
    font-family: 'Afacad Flux', sans-serif;
    background-image: linear-gradient(to right, #ff7e5f, #feb47b); /* Background campuran warna */
    color: #333;
}

nav {
            display: flex;
            align-items: center; /* Menyelaraskan logo dan tautan secara vertikal */
            background: linear-gradient(135deg, #ff4081, #ffab40); /* Latar belakang gradien */
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            margin-bottom: 19px;
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
.container {
    width: 80%;
    margin: 40px auto;
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #333;
    margin-bottom: 10px;
}

p {
    margin-bottom: 20px;
}

.map {
    width: 100%;
    height: 450px;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

iframe {
    width: 100%;
    height: 100%;
    border: none;
}
    </style>
    <nav>
    <div class="logo">
        <img src="img/images-removebg-preview.png" alt="Logo Ujian Sekolah"> <!-- Ganti 'logo.png' dengan path logo Anda -->
    </div>
    <ul class="nav-links">
        <li><a href="register.php">Daftar Akun Sebagai Siswa</a></li>
        <li><a href="login.php">Login Sebagai Siswa</a></li>
        <li><a href="event.php">Event</a></li>
        <li><a href="team.php">Tentang Kami</a></li>
        <li><a href="#">Kontak</a></li>
        <li><a href="dewanGuru.php">Staff Dewan Guru</a></li>
        <li><a href="#">Bantuan</a></li>
        <li><a href="Fasilitas.php">Fasilitas</a></li>
        
    </ul>
</nav>
    <div class="container">
        <h1>Lokasi</h1>
        <p>Alamat: J5HX+59V, Pandan, Kembiritan, Kec. Genteng, Kabupaten Banyuwangi, Jawa Timur 68465</p>
        <p>Keterangan: Gedung ini terletak di pusat kota Jakarta, dekat dengan stasiun kereta api dan terminal bus.</p>
        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3947.3011075804484!2d114.1958393748276!3d-8.37201288440359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd155a23172a901%3A0x8053e472840d384f!2sSMP%20Negeri%204%20Genteng!5e0!3m2!1sid!2sid!4v1729602185267!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</body>
</html>