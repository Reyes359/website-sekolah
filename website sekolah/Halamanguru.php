<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Guru</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
      * {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-image: linear-gradient(to bottom right, #ffcc00, #ff6699);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    text-align: center;
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    max-width: 90%; /* Maksimal lebar kontainer */
    width: 100%; /* Lebar responsif */
}

header {
    margin-bottom: 20px;
}

h1 {
    font-size: 28px;
    color: #333;
}

main {
    display: flex;
    flex-direction: column; /* Mengatur kolom secara vertikal */
    align-items: center; /* Menyelaraskan item di tengah */
}

.teacher-card {
    background-color: #f9f9f9;
    border-radius: 10px;
    padding: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    margin: 10px 0; /* Jarak antar kartu */
    width: 80%; /* Lebar kartu */
    transition: transform 0.2s;
}

.teacher-card:hover {
    transform: scale(1.05);
}

.teacher-image {
    width: 100%;
    border-radius: 10px;
}

.headmaster {
    width: 90%; /* Lebar kepala sekolah sedikit lebih besar */
}

.headmaster h2 {
    font-size: 24px; /* Ukuran font kepala sekolah lebih besar */
    color: #ff6699; /* Warna khusus untuk kepala sekolah */
}
    </style>
    <div class="container">
        <header>
            <h1>Daftar Guru</h1>
        </header>
        <main>
            <div class="teacher-card headmaster">
                <img src="https://example.com/headmaster.jpg" alt="Kepala Sekolah" class="teacher-image">
                <h2>Kepala Sekolah</h2>
            </div>
            <div class="teacher-card">
                <img src="https://example.com/teacher1.jpg" alt="Guru 1" class="teacher-image">
                <h2>Guru 1</h2>
            </div>
            <div class="teacher-card">
                <img src="https://example.com/teacher2.jpg" alt="Guru 2" class="teacher-image">
                <h2>Guru 2</h2>
            </div>
            <div class="teacher-card">
                <img src="https://example.com/teacher3.jpg" alt="Guru 3" class="teacher-image">
                <h2>Guru 3</h2>
            </div>
            <div class="teacher-card">
                <img src="https://example.com/teacher4.jpg" alt="Guru 4" class="teacher-image">
                <h2>Guru 4</h2>
            </div>
        </main>
    </div>
</body>
</html>