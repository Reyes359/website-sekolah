<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Website</title>
</head>
<body>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #e9ecef; /* Warna latar belakang yang lebih cerah */
}

header {
    background-color: #007bff; /* Warna biru yang lebih cerah */
    color: #fff;
    padding: 1rem;
    text-align: center;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center; /* Mengubah posisi navigasi menjadi pusat */
}

nav li {
    margin: 0 20px; /* Mengatur margin untuk navigasi */
}

nav a {
    color: #fff;
    text-decoration: none;
}

main {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 2rem;
}

section {
    background-color: #ffffff; /* Warna latar belakang putih untuk bagian */
    padding: 1.5rem; /* Menambahkan padding lebih banyak */
    margin: 20px 0; /* Menambahkan margin vertikal */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Efek bayangan lebih dalam */
    border-radius: 8px; /* Menambahkan sudut membulat */
    width: 80%; /* Mengatur lebar bagian */
}

h2 {
    color: #007bff; /* Mengubah warna judul */
    margin-bottom: 10px;
}

p, ul {
    color: #333;
    margin-bottom: 20px;
}

footer {
    background-color: #333;
    color: #fff;
    padding: 1rem;
    text-align: center;
    clear: both;
}
    </style>
    <header>
        <nav>
            <ul>
                <li><a href="#about-us">About Us</a></li>
                <li><a href="#contact-us">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="about-us">
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex. Kami adalah lembaga pendidikan yang berkomitmen untuk memberikan pendidikan terbaik kepada siswa kami.</p>
        </section>
        <section id="contact-us">
            <h2>Contact Us</h2>
            <p>Jika Anda memiliki pertanyaan, silakan hubungi kami melalui informasi di bawah ini:</p>
            <ul>
                <li>Email: info@schoolwebsite.com</li>
                <li>Telepon: (123) 456-7890</li>
                <li>Alamat: Jl. Pendidikan No. 1, Kota Belajar</li>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 School Website</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>