<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
            position: relative;
            background-image: url('{{ asset('images/konoha_hd.jpg') }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            z-index: 0;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: -1;
        }

        .login-card {
            position: relative;
            background-color: #ffffff;
            padding: 50px 45px 40px 45px;
            border-radius: 12px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            width: 360px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
            z-index: 1;
        }

        .login-card:hover {
            transform: translateY(-5px);
        }

        .login-title {
            color: #006f20;
            margin-bottom: 25px;
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

        .login-button:hover {
            background-color: #45a049;
        }

        .login-button:active {
            transform: scale(0.99);
        }

        .login-logo {
            max-width: 120px;
            height: auto;
            margin-bottom: 25px;
            border-radius: 50%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .icon-back {
            position: absolute;
            top: 15px;
            left: 15px;
            background-color: rgba(240, 240, 240, 0.9);
            border-radius: 50%;
            padding: 8px;
            transition: background-color 0.3s, transform 0.2s;
            cursor: pointer;
        }

        .icon-back:hover {
            background-color: #e0e0e0;
            transform: scale(1.1);
        }

        .icon-back svg {
            width: 22px;
            height: 22px;
            fill: #333;
        }

        @media (max-width: 480px) {
            .login-card {
                width: 90%;
                padding: 40px 25px;
            }

            .icon-back {
                top: 10px;
                left: 10px;
                padding: 6px;
            }

            .icon-back svg {
                width: 18px;
                height: 18px;
            }
        }
    </style>
</head>

<body>
    <div class="login-card">
        <a href="{{ url('/') }}" class="icon-back" title="Kembali ke Beranda">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M10 17l1.41-1.41L8.83 13H21v-2H8.83l2.58-2.59L10 7l-5 5 5 5zm9 4H5a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v4h-2V5H5v14h14v-4h2v4a2 2 0 01-2 2z"/>
            </svg>
        </a>

        <img src="{{ asset('images/logo.png') }}" alt="Logo Admin" class="login-logo">
        <h1 class="login-title">Login Admin</h1>

        <form action="{{ route('login.post') }}" method="POST" class="login-form">
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
