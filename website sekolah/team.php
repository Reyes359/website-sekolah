<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team</title>
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
            padding: 20px;
            background-image: url("img/4769550-hd_1366_720_25fps.mp4");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-muted: true;
            background-size: cover;
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

h1 {
    color: white;
    text-align: center;
}

        .team-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .team-container:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 10 rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
        }

        .team-member {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin: 15px;
            padding: 20px;
            text-align: center;
            width: 250px;
        }
        .team-member img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }
        .social-icons a {
            margin: 0 5px;
            color: #333;
            text-decoration: none;
        }

        h5 {
            color: white;
            text-align: center;
        }

    </style>
</head>
<body>
<?php include "layout/navbar.html"?>
<h1>Meet Our Team</h1>
<div class="team-container">
    <div class="team-member">
        <img src="img/th.png" alt="Anggota Tim 1">
        <h2>Arya</h2>
        <p>Peran: Coding & System</p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
    <!-- Tambahkan anggota tim lainnya di sini -->
    <div class="team-member">
        <img src="img/th.png" alt="Anggota Tim 2">
        <h2>Dannys</h2>
        <p>Peran: Design & Styling</p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
    <div class="team-member">
        <img src="img/th.png" alt="Anggota Tim 3">
        <h2>Reyes</h2>
        <p>Peran: Coding & Styling</p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
</div>
<div class="video-background">
        <video autoplay muted loop>
            <source src="img/3191291-uhd_3840_2160_25fps.mp4" type="video/mp4">
            
        </video>
    </div>
    <footer>
        <hr />
        <h5>&copy; Semua hak dilindungi oleh SMPN 4 Genteng.</h5>
        </footer>
</body>
</html>