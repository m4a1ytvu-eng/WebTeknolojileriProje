<?php

$email = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');

// Mail boş mu kontrol
if (empty($email) || empty($password)) {

    header("Location: login.html?durum=hata");
    exit();

}

// @ işaretine göre ayır
$parts = explode('@', $email);

// Kullanıcı adı kısmı
$user_id = $parts[0] ?? '';

// Mail kontrolü
$mailDogru = str_ends_with($email, "@sakarya.edu.tr");

// Şifre kontrolü
$sifreDogru = ($password === $user_id);

// GİRİŞ BAŞARILI
if ($mailDogru && $sifreDogru) {

    echo "
    <!DOCTYPE html>
    <html lang='tr'>

    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>

        <title>Hoşgeldiniz</title>

        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    </head>

    <body class='d-flex justify-content-center align-items-center vh-100'
          style='background-color:#d1f2eb;'>

        <div class='card shadow-lg p-5 text-center border-dark'
             style='max-width:500px; border-radius:20px;'>

            <h1 class='fw-bold mb-4'>
                Hoşgeldiniz $user_id
            </h1>

            <p class='lead'>
                Giriş işlemi başarılı.
            </p>

            <a href='index.html'
               class='btn btn-dark mt-3'>
               Ana Sayfaya Dön
            </a>

        </div>

    </body>

    </html>
    ";

}

// GİRİŞ HATALI
else {

    header("Location: login.html?durum=hata");
    exit();

}

?>