<?php
if ($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $gender = $_POST['gender'];
    $message = $_POST['message'];

    echo "<h2>Form Verileri Başarıyla Alındı</h2>";
    echo "<b>Ad Soyad:</b> $name <br>";
    echo "<b>E-posta:</b> $email <br>";
    echo "<b>Telefon:</b> $phone <br>";
    echo "<b>Konu:</b> $subject <br>";
    echo "<b>Cinsiyet:</b> $gender <br>";
    echo "<b>Mesaj:</b> $message <br>";
    echo "<br><a href='index.html'>Ana Sayfaya Dön</a>";
} else {
    echo "Lütfen formu kullanarak geliniz.";
}
?>