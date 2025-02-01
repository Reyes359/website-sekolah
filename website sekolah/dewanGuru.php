<?php
// Mengatur header untuk HTML
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Dewan Guru</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="favicon.ico">
    <style>

        *  {
            font-family: 'Afacad Flux', sans-serif;
        }

        body {
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background: #4CAF50;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        .staff-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin: 20px;
            padding: 20px;
            text-align: center;
        }
        .staff-card img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
        }
        .staff-card h3 {
            margin: 10px 0;
        }
        .staff-card p {
            color: #555;
        }
    </style>
</head>
<body>
<?php include "layout/navbar.html" ?>
<header>
    <h1>Staff Dewan Guru</h1>
</header>

<div class="container">
    <?php
    // Array data staff
    $staff = [
        [
            "nama" => "Sukaryanto S.pd",
            "jabatan" => "Kepala Sekolah",
            "gambar" => "https://via.placeholder.com/120"
        ],
        [
            "nama" => "Marwiyah S.pd",
            "jabatan" => "Guru Agama Islam & IPA",
            "gambar" => "https://via.placeholder.com/120"
        ],
        [
            "nama" => "Ismariah S.pd",
            "jabatan" => "Guru ",
            "gambar" => "https://via.placeholder.com/120"
        ],
        [
            "nama" => "Ismariah S.pd",
            "jabatan" => "Guru ",
            "gambar" => "https://via.placeholder.com/120"
        ],
        [
            "nama" => "Soim S.pd",
            "jabatan" => "Guru PPKN",
            "gambar" => "https://via.placeholder.com/120"
        ],
        [
            "nama" => "Aisyah S.pd",
            "jabatan" => "Guru Prakarya",
            "gambar" => "https://via.placeholder.com/120"
        ],
        [
            "nama" => "Juwening S.pd",
            "jabatan" => "Guru Matematika ",
            "gambar" => "https://via.placeholder.com/120"
        ],
        [
            "nama" => "Eko Purwanto S.pd",
            "jabatan" => "Guru Seni Budaya",
            "gambar" => "https://via.placeholder.com/120"
        ],
        [
            "nama" => "Helmis S.pd",
            "jabatan" => "Guru Bahasa Inggris",
            "gambar" => "https://via.placeholder.com/120"
        ],
        // Tambahkan staff lainnya di sini
    ];

    // Menampilkan data staff
    foreach ($staff as $anggota) {
        echo "<div class='staff-card'>";
        echo "<img src='{$anggota['gambar']}' alt='{$anggota['nama']}'>";
        echo "<h3>{$anggota['nama']}</h3>";
        echo "<p>{$anggota['jabatan']}</p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>