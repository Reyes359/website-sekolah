<?php  
 include "service/database.php";

$register_message = "";

 if(isset($_POST["register"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "INSERT INTO users (username, password) VALUES 
    ('$username', '$password')";

    if($db->query($sql)) {
        $register_message = "Sip👍 Daftar Berhasil Silahkan Login";
    }else {
      $register_message = "Gagal, Periksa Koneksi Internet Dan Coba Lagi";
    }
 }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="favicon.ico">
        <title>Register</title>
    </head>
    <body>
    <style>
      * {
        font-family: "Afacad Flux", sans-serif;
      }

      body {
        /* Set a fallback color for browsers that don't support background videos */
        background-color: #f0f0f0;
        /* Set the video as a background image */
        background-image: url("img/4769550-hd_1366_720_25fps.mp4");
        /* Set the video as a background image with no repeat */
        background-repeat: no-repeat;
        /* Set the video as a background image that covers the entire container */
        background-size: cover;
        /* Set the video as a background image that is fixed in position */
        background-attachment: fixed;
        /* Set the video as a background image that is muted */
        background-muted: true;
        /* Set the video as a background image that loops */
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

.form-container {
  width: 335px;
  border-radius: 0.75rem;
  background-color: rgba(17, 24, 39, 1);
  padding: 2rem;
  color: rgba(243, 244, 246, 1);
  margin: auto;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

.title {
  text-align: center;
  font-size: 1.5rem;
  line-height: 2rem;
  font-weight: 700;
}

.form {
  margin-top: 1.5rem;
}

.input-group {
  margin-top: 0.25rem;
  font-size: 0.875rem;
  line-height: 1.25rem;
}

.input-group label {
  display: block;
  color: rgba(156, 163, 175, 1);
  margin-bottom: 4px;
}

.input-group input {
  width: 100%;
  border-radius: 0.375rem;
  border: 1px solid rgba(55, 65, 78, 1);
  outline: 0;
  background-color: rgba(17, 24, 39, 1);
  padding: 0.75rem 0.50rem;
  color: rgba(243, 244, 246, 1);
}

.input-group input:focus {
  border-color: rgba(167, 139, 250);
}

.forgot {
  display: flex;
  justify-content: flex-end;
  font-size: 0.75rem;
  line-height: 1rem;
  color: rgba(156, 163, 175,1);
  margin: 8px 0 14px 0;
}

.forgot a,.signup a {
  color: rgba(243, 244, 246, 1);
  text-decoration: none;
  font-size: 14px;
}

.forgot a:hover, .signup a:hover {
  text-decoration: underline rgba(167, 139, 250, 1);
}

.sign {
  display: block;
  width: 100%;
  background-color: rgba(167, 139, 250, 1);
  padding: 0.75rem;
  text-align: center;
  color: rgba(17, 24, 39, 1);
  border: none;
  border-radius: 0.375rem;
  font-weight: 600;
}

.social-message {
  display: flex;
  align-items: center;
  padding-top: 1rem;
}

.line {
  height: 1px;
  flex: 1 1 0%;
  background-color: rgba(55, 65, 81, 1);
}

.social-message .message {
  padding-left: 0.75rem;
  padding-right: 0.75rem;
  font-size: 0.875rem;
  line-height: 1.25rem;
  color: rgba(156, 163, 175, 1);
}

.social-icons {
  display: flex;
  justify-content: center;
}

.social-icons .icon {
  border-radius: 0.125rem;
  padding: 0.75rem;
  border: none;
  background-color: transparent;
  margin-left: 8px;
}

.social-icons .icon svg {
  height: 1.25rem;
  width: 1.25rem;
  fill: #fff;
}

.signup {
  text-align: center;
  font-size: 0.75rem;
  line-height: 1rem;
  color: rgba(156, 163, 175, 1);
}

.navbar {
    text-align: flex-start;
  background-color: transparent;
  color: white;
}


.nav-item {
  font-size: 0.9em;
  font-weight: 500;
  letter-spacing: 1.2px;
  margin-left: 10px;
}

.navbar-menu {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  padding: 10px 0;
}

    </style>
   
   <?php include "layout/navbar.html"?>
<div class="form-container">
	<p class="title">Register</p>
	<form action="register.php" class="form" method="POST">
  <i><?=$register_message ?></i>
		<div class="input-group">
			<label for="username">Username</label>
			<input type="text" name="username" id="username" placeholder="">
		</div>
		<div class="input-group">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" placeholder="">
			<div class="forgot">
				<a rel="noopener noreferrer" href="#">Forgot Password ?</a>
			</div>
		</div>
		<button class="sign" name="register">Sign Up</button>
	</form>
	<div class="social-message">
		<div class="line"></div>
		<div class="line"></div>
	</div>
	<p class="signup">have account?
		<a rel="noopener noreferrer" href="login.php" class="">Sign In</a>
	</p>
</div>
<div class="video-background">
        <video autoplay muted loop>
            <source src="img/2611250-hd_1920_1080_30fps.mp4" type="video/mp4">
            
        </video>
    </div>
<?php include "layout/footer.html" ?>
    </body>
    </html>