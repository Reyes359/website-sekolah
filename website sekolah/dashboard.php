<?php
session_start();

// Set waktu terakhir aktif jika belum ada
if (!isset($_SESSION['last_activity'])) {
    $_SESSION['last_activity'] = time(); // waktu sekarang
}

// Perbarui waktu terakhir aktif setiap kali pengguna melakukan aktivitas
if (isset($_POST['action'])) {
    $_SESSION['last_activity'] = time(); // update waktu
}

// Cek jika pengguna aktif dalam 5 menit terakhir
$inactive_duration = 300; // 5 menit dalam detik
if (time() - $_SESSION['last_activity'] > $inactive_duration) {
    echo "Pengguna tidak aktif.";
} else {
    echo "Pengguna aktif.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&display=swap" rel="stylesheet">
        <script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js"></script>
        <link rel="shortcut icon" href="favicon.ico">

</head>
<body>
    <style>
        * {
        font-family: "Afacad Flux", sans-serif;
        color: grey;
        }
       
        body {
            background-image: url("img/Desain tanpa judul.svg");
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.dashboard {
    width: 80%;
    margin: 20px auto;
    padding: 20px;
    background: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.dashboard h3 {
    text-align: center;
    text-decoration: underline;
    text-shadow: 0 0 1.5px;
}

h1 {
    text-align: center;
}

.material-box, .questions-box {
    margin: 20px 0;
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
}

.questions-box ul {
    list-style-type: none;
    padding: 0;
}

.questions-box li {
    margin: 10px 0;
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
        <li><a href="event.php">Tantangan Tersedia</a></li>
        <li><a href="team.php">Tentang Kami</a></li>
        <li><a href="dewanGuru.php">Staff Dewan Guru</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</nav>

    
    <div class="dashboard">
        <h1>Lesson Dashboard</h1>
        <h3>Teruslah Haus Akan Ilmu Karena Ilmu Itu <span id="quotes">Mahal!</span></h3>
        <h3>Hai <?= $_SESSION["username"] ?> Siap Untuk Mendapat Kan Ilmu?</h3>
        <div class="material-box">
            <h2>Lesson Material</h2>
            <h3>PHP Tutorial By Dea Afrizal</h3>
            <iframe class="materi" width="560" height="315" src="https://www.youtube.com/embed/Ak6VTSekGP4?si=Q2kah0w0HinVcIfL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="questions-box">
            <h2>Questions</h2>
            <ul>
                <li>Question 1: What is the main topic of the lesson?</li>
                <li>Question 2: How can you apply this knowledge in real life?</li>
                <li>Question 3: What are some examples related to this topic?</li>
            </ul>
        </div>
    </div>
<script>
    new TypeIt("#quotes", {
    strings: ["Bermanfaat!," , "Penting!."],
    speed: 75,
    waitUntilVisible: true,
}).go();
</script>      

</body>
</html>
<?php include "layout/footer.html" ?>