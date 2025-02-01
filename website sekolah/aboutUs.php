<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Sekolah</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&display=swap" rel="stylesheet">
</head>
<body>
    <style>
      * {
        font-family: 'Afacad Flux', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background: linear-gradient(to right, #ff7e5f, #feb47b);
    color: #333;
}

header {
    background-color: rgba(0, 0, 0, 0.7);
    color: #fff;
    padding: 20px;
    text-align: center;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
}

nav li {
    margin: 0 15px;
}

nav a {
    color: #fff;
    text-decoration: none;
    transition: color 0.3s;
}

nav a:hover {
    color: #ffcc00;
}

.about {
    background-color: rgba(255, 255, 255, 0.9);
    padding: 20px;
    margin: 20px auto;
    max-width: 800px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

h1, h2 {
    margin-bottom: 15px;
}

footer {
    background-color: rgba(0, 0, 0, 0.7);
    color: #fff;
    padding: 10px;
    text-align: center;
    position: relative;
    bottom: 0;
    width: 100%;
}
    </style>
    <?php include "layout/navbar.html"?>
    <section class="about">
        <h1>Tentang Sekolah Kami</h1>
        <p>Sekolah XYZ didirikan pada tahun 2000 dengan visi untuk menciptakan lingkungan belajar yang inspiratif dan mendukung. Kami berkomitmen untuk memberikan pendidikan berkualitas tinggi kepada semua siswa kami.</p>
        <h2>Visi dan Misi</h2>
        <p>Visi kami adalah menjadi sekolah terkemuka yang menghasilkan generasi yang cerdas, kreatif, dan berkarakter. Misi kami adalah menyediakan pendidikan yang inklusif dan berkualitas, serta membangun karakter siswa melalui berbagai kegiatan ekstrakurikuler.</p>
        <h2>Fasilitas</h2>
        <p>Kami memiliki fasilitas modern yang mendukung proses belajar mengajar, termasuk laboratorium, perpustakaan, dan ruang olahraga yang lengkap.</p>
    </section>
    <footer>
        <p>&copy; 2024 Sekolah XYZ</p>
    </footer>
</body>
</html>