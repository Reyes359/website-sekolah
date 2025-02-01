<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Error</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
      * {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: 'Arial', sans-serif;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: linear-gradient(to bottom right, #ff69b4, #33cc33);
}

.container {
    text-align: center;
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 10px;
    padding: 40px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    max-width: 600px; /* Maksimal lebar kontainer */
    width: 90%; /* Lebar responsif */
}

header {
    margin-bottom: 20px;
}

h1 {
    font-size: 28px;
    color: #333;
}

main {
    margin-bottom: 20px;
}

.dino-image {
    width: 120px; /* Atur ukuran gambar dino */
    margin: 20px 0; /* Jarak atas dan bawah */
}

p {
    font-size: 16px;
    color: #666;
    line-height: 1.5; /* Jarak antar baris */
}

.button-container {
    display: flex;
    justify-content: center;
    gap: 20px; /* Jarak antar tombol */
}

.animated-button {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
    font-size: 16px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.animated-button:hover {
    background-color: #3e8e41;
}

.animated-button:active {
    transform: translateY(2px);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

.animated-button {
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
    100% {
        transform: scale(1);
    }
}

footer {
    margin-top: 20px;
    font-size: 14px;
    color: #666;
}
    </style>
    <div class="container">
        <header>
            <h1>Koneksi Internet Tidak Tersedia</h1>
        </header>
        <main>
            <img src="https://www.shutterstock.com/image-vector/pixel-art-dinosaur-describing-offline-600nw-1840483378.jpg" alt="Dino" class="dino-image">
            <p>Maaf, sepertinya Anda tidak terhubung ke internet. Silakan periksa koneksi Anda.</p>
            <div class="button-container">
                <button class="animated-button">Coba Lagi</button>
                <button class="animated-button">Periksa Koneksi Internet</button>
            </div>
        </main>
        <footer>
            <p>&copy; 2024 Semua hak dilindungi oleh SMPN 4 Genteng.</p>
        </footer>
    </div>
</body>
</html>