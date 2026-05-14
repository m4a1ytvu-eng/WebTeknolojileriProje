<?php
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Mailin başındaki kullanıcı adını al
$parts = explode('@', $email);
$user_id = $parts[0];

// KONTROL
if (!empty($password) && $password === $user_id && str_ends_with($email, "@sakarya.edu.tr")) {
    // BAŞARILI GİRİŞ
    echo "<!DOCTYPE html>
    <html lang='tr'>
    <head>
        <meta charset='UTF-8'>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
        <link rel='stylesheet' href='style.css'>
        <title>Hoşgeldiniz</title>
    </head>
    <body class='d-flex justify-content-center align-items-center vh-100' style='background-color: #d1f2eb;'>
        <div class='custom-card p-5 text-center shadow-lg' style='background-color: #45818e; border-radius: 20px; border: 2px solid #2c3e50;'>
            <h1 class='display-4 fw-bold mb-4' style='color: #2c3e50 !important;'>Hoşgeldiniz $user_id</h1>
            <p class='lead mb-4' style='color: #2c3e50 !important; font-weight: 600;'>Giriş işleminiz başarıyla tamamlandı.</p>
            <a href='index.html' class='btn btn-dark px-5 py-2 fw-bold shadow'>Ana Sayfaya Git</a>
        </div>
    </body>
    </html>";
} else {
    // HATALI GİRİŞ: login.html sayfasına 'hata' parametresiyle geri yolla
    header("Location: login.html?durum=hata");
    exit();
}
?>