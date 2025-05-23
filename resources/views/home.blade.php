<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Beranda</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background:rgb(244, 245, 246);
            color: #333;
        }

        nav {
            background-color: #007BFF;
            padding: 10px 20px;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a:hover {
            text-decoration: underline;
            color :white;
        }

        header {
            text-align: center;
            padding: 40px 20px;
        }

        header h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
            gap: 40px;
            flex-wrap: wrap;
        }

        .profile-img {
            width: 250px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        .bio {
            max-width: 500px;
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .bio p {
            line-height: 1.6;
            margin-bottom: 10px;
        }

        footer {
            background-color: #007BFF;
            color: white;
            text-align: center;
            padding: 2px;
            margin-top: 80px;
        }
    </style>
</head>
<body>

<nav>
    <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/about') }}">About</a></li>
        <li><a href="{{ url('/project') }}">Project</a></li>
    </ul>
</nav>

<header>
    <h1>Halo! Saya Marcella Fitri Handayani 👋</h1>
    <p>Mahasiswi Teknik Informatika</p>
</header>

<div class="content">
    <img src="{{ asset('images/foto.jpg') }}" alt="Foto Profil" class="profile-img">

    <div class="bio">
        <p><strong>Nama:</strong> Marcella Fitri Handayani</p>
        <p><strong>Alamat:</strong> Nganjuk, Jawa Timur</p>
        <p><strong>Jurusan:</strong> Teknologi Informasi</p>
        <p><strong>Program Studi:</strong> Teknik Informatika</p>
        <p><strong>Kampus:</strong> Politeknik Negeri Jember</p>
        <p><strong>Email:</strong> <a href="mailto:marcellafitri271@gmail.com?subject=Halo&body=Halo, saya ingin bertanya tentang portofolio Anda.">marcellafitri271@gmail.com</a></p>
        <p><strong>Instagram:</strong> <a href="https://instagram.com/mcella_ftrh" target="_blank">@mcella_ftrh</a></p>

    </div>
</div>

<footer>
    <p>&copy; 2025 Marcella Fitri Handayani</p>
</footer>

</body>
</html>
