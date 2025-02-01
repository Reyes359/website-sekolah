<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Website Sekolah</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&display=swap" rel="stylesheet">
        <script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js"></script>
        <link rel="shortcut icon" href="favicon.ico">
    <style>
        body {
            font-family: 'Afacad Flux', sans-serif;
            background-color: #e9ecef;
            margin: 0;
            padding: 20px;
            background-color: #f0f0f0;
            
  /* Set the video as a background image */
            background-image: url("img/4769550-hd_1366_720_25fps.mp4");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-muted: true;
            background-size: cover;
}

.title {
    color: white;
}

.video-background {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: -1;
}

        

            nav {
            display: flex;
            align-items: center; /* Menyelaraskan logo dan tautan secara vertikal */
            background: linear-gradient(135deg, #ff4081, #ffab40); /* Latar belakang gradien */
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            margin-bottom: 12px;
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

        header {
            background: linear-gradient(90deg, #4CAF50, #81C784);
            color: white;
            padding: 20px 0;
            text-align: center;
            border-radius: 8px;
        }
        main {
            margin-top: 20px;
            text-align: center;
        }
        
        p {
            color: white;
            font-size: 1.1em;
        }
        .exam-list {
            list-style-type: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .exam-list li {
            background: #fff;
            margin: 10px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }

        .exam-list a {
         text-decoration: none;
        }

        .exam-list li:hover {
            transform: scale(1.05);
        }
        footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9em;
            color: #757575;
        }

        footer {
            color: white;
        }

        @media screen and (max-width: 768px) {
    .nav-links {
        display: none;
        flex-direction: column;
        width: 100%;
        position: absolute;
        top: 60px;
        left: 0;
        background-color: #333;
    }

    .nav-links.active {
        display: flex;
    }

    .menu-toggle {
        display: flex;
    }
}
    </style>
</head>
<body>

<nav>
    <div class="logo">
        <img src="img/images-removebg-preview.png" alt="Logo Ujian Sekolah"> <!-- Ganti 'logo.png' dengan path logo Anda -->
    </div>

    <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
    
    <ul class="nav-links">
        <li><a href="register.php">Daftar Akun Sebagai Siswa</a></li>
        <li><a href="login.php">Login Sebagai Siswa</a></li>
        <li><a href="event.php">Event</a></li>
        <li><a href="team.php">Tentang Kami</a></li>
        <li><a href="#">Kontak</a></li>
        <li><a href="dewanGuru.php">Staff Dewan Guru</a></li>
        <li><a href="Fasilitas.php">Fasilitas</a></li>
</div>
    </ul>
</nav>

<script>
    const mobileMenu = document.getElementById('mobile-menu');
const navList = document.querySelector('.nav-links');

mobileMenu.addEventListener('click', () => {
    navList.classList.toggle('active');
});
</script>

<header>
    <h1 class="title" id="title">Selamat Datang Di Website SMPN 4 GENTENG</h1>
</header>

<main>
    <h2 class="title">Halaman Tersedia</h2>
    <p>Pilih Halaman yang ingin Anda Kunjungi:</p>
    <ul class="exam-list" >
        <a href="event.php"><li style="background-color: #FFEB3B; color: #fff;">Event(Acara)</li></a>
        <a href="dewanGuru.php"><li style="background-color: #64B5F6; color: #fff;">Staff Guru</li></a>
        <a href="Fasilitas.php"><li style="background-color: #FF7043; color: #fff;">Fasilitas</li></a>
        <a href="aboutUs.php"><li style="background-color: #81C784; color: #fff;">Tentang SMPN 4 GENTENG</li></a>
        <a href="location.php"><li style="background-color: #BA68C8; color: #fff;">Detail Lokasi</li></a>
    </ul>
</main>
<div class="video-background">
        <video autoplay muted loop>
            <source src="img/2611250-hd_1920_1080_30fps.mp4" type="video/mp4">
            
        </video>
    </div>
<script>
   new TypeIt("#title", {
    strings: "Tangguh, Prestasi, Hebat!",
    speed: 50,
    waitUntilVisible: true,
}).go();
</script>

<footer>
    <p>&copy; 2024 Website Sekolah. Semua hak dilindungi oleh SMPN 4 Genteng.</p>
</footer>


</body>
</html>