<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pertanyaan</title>
    <link rel="shortcut icon" href="favicon.ico">
    <style>

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #4CAF50, #73EC8B );
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }
        .container {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            padding: 30px;
            width: 90%;
            max-width: 600px;
            backdrop-filter: blur(10px);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2em;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);
        }
        .question {
            display: none;
            margin: 20px 0;
            font-size: 1.2em;
            color: #fff;
        }
        input[type="radio"] {
            display: none;
        }
        input[type="radio"]:checked + .question {
            display: block;
        }
        .navigation {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        label {
            padding: 10px 10px;
            background-color: #0D92F4;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }
        label:hover {
            background-color: #e91e63;
            transform: scale(1.05);
        }
        .timer {
            text-align: center;
            font-size: 1.5em;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<nav>
    <div class="logo">
        <img src="img/images-removebg-preview.png" alt="Logo Ujian Sekolah"> <!-- Ganti 'logo.png' dengan path logo Anda -->
    </div>
    <ul class="nav-links">
        <li><a href="#">Beranda</a></li>
        <li><a href="#">Ujian Tersedia</a></li>
        <li><a href="#">Tentang Kami</a></li>
        <li><a href="#">Kontak</a></li>
        <li><a href="#">Bantuan</a></li>
    </ul>
</nav>

    <div class="container">
        <h1>Daftar Pertanyaan</h1>
        <div class="timer" id="timer">Waktu tersisa: <span id="time">60</span> detik</div>
        
        <input type="radio" id="q1" name="questions" checked>
        <div class="question">1. Apa itu HTML?<br>HTML adalah bahasa markup yang digunakan untuk membuat struktur halaman web.</div>

        <input type="radio" id="q2" name="questions">
        <div class="question">2. Apa perbedaan antara HTML dan CSS?<br>HTML digunakan untuk struktur, sedangkan CSS digunakan untuk styling halaman web.</div>

        <input type="radio" id="q3" name="questions">
        <div class="question">3. Sebutkan beberapa elemen dasar HTML!<br>Elemen dasar HTML termasuk <code>&lt;div&gt;</code>, <code>&lt;span&gt;</code>, <code>&lt;p&gt;</code>, dan <code>&lt;a&gt;</code>.</div>

        <input type="radio" id="q4" name="questions">
        <div class="question">4. Bagaimana cara membuat tautan di HTML?<br>Tautan dibuat dengan menggunakan tag <code>&lt;a&gt;</code> dengan atribut <code>href</code>.</div>

        <input type="radio" id="q5" name="questions">
        <div class="question">5. Apa itu tag <code>&lt;div&gt;</code> dan <code>&lt;span&gt;</code>?<br>Tag <code>&lt;div&gt;</code> adalah elemen blok, sedangkan <code>&lt;span&gt;</code> adalah elemen inline.</div>

        <div class="navigation">
            <label for="q1">Previous</label>
            <label for="q2">Next</label>
        </div>
    </div>
    <script>
    let time = 5; // waktu dalam detik
    let timerId = setInterval(() => {
        document.getElementById('time').innerHTML= time;
        time--;
        if (time <= 0) {
            clearInterval(timerId);
            alert('Waktu habis!');
        }
    }, 1000); // 1000 ms = 1 detik
</script>
</body>
</html>