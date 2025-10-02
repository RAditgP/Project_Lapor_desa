<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        /* --- 1. Setup dan Gambar Background --- */
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
            position: relative;
            /* Diperlukan untuk overlay */

            /* GANTI URL INI DENGAN URL GAMBAR ANDA */
            background-image: url('images/konoha_hd.jpg');

            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            z-index: 0;
            /* Pastikan body di bawah overlay */
        }

        /* --- 2. Overlay Gelap untuk Keterbacaan --- */
        /* Pseudo-element untuk membuat lapisan gelap di atas gambar background */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.4);
            /* Hitam transparan 40% */
            z-index: -1;
            /* Pastikan di bawah form login */
        }

        /* --- 3. Kontainer Kartu Login (Card) --- */
        .login-card {
            background-color: #ffffff;
            padding: 40px 45px;
            border-radius: 12px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            width: 360px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
            z-index: 1;
            /* Pastikan form di atas overlay */
        }

        .login-card:hover {
            transform: translateY(-5px);
        }

        /* --- 4. Judul, Input, dan Tombol (sama seperti sebelumnya) --- */
        .login-title {
            color: #006f20ff;
            margin-bottom: 35px;
            font-size: 30px;
            font-weight: 700;
        }

        .input-group {
            margin-bottom: 25px;
        }

        .login-form input {
            width: 100%;
            padding: 14px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
            transition: all 0.3s;
        }

        .login-form input:focus {
            border-color: #4CAF50;
            box-shadow: 0 0 0 3px rgba(76, 175, 80, 0.2);
            outline: none;
        }

        .login-button {
            width: 100%;
            padding: 14px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.1s;
            letter-spacing: 1px;
            margin-top: 10px;
        }

        /* --- 4. Logo di dalam Kotak Login --- */
        .login-logo {
            max-width: 120px;
            /* GANTI NILAI INI */
            height: auto;
            margin-bottom: 30px;
            /* DAN SESUAIKAN JARAK INI */
            border-radius: 50%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .login-button:hover {
            background-color: #45a049;
        }

        .login-button:active {
            transform: scale(0.99);
        }
    </style>
</head>

<body>

    <div class="login-card">
        <img src="images/konoha.merah.jpg" alt="Logo Admin" class="login-logo">

        <h1 class="login-title">Login Admin</h1>

        <form action="{{ route('login') }}" method="POST" class="login-form">
            @csrf

            <div class="input-group">
                <input type="email" name="email" placeholder="Email" required autofocus>
            </div>

            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <button type="submit" class="login-button">MASUK</button>
        </form>
    </div>

</body>

</html>