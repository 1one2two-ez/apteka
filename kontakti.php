<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $comment = $_POST['comment'];

    $to = "azyzzyalex@gmail.com";
    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n";
    $message = "Имя: $name \nEmail: $email \nТема: $subject \nСообщение: $comment";

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Ваше повідомлення успішно надіслано. Ми зв'яжемося з вами найближчим часом..');</script>";
    } else {
        echo "<script>alert('Помилка відправки повідомлення. Будь ласка, спробуйте ще раз.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Головна</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        type="text/css">
    <link rel="stylesheet" href="stylesfgolovna.css" type="text/css">
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="logo-container">
                <a href="golovna.php"><img src="logotip/1.webp" alt="LOGO"></a>
            </div>
            <div class="navbar-links">
                <a class="navbar-brand" href="golovna.php">Головна</a>
                <a class="navbar-brand" href="nashilikari.php">Наші лікарі</a>
                <a class="navbar-brand" href="poslugi.php">Послуги</a>
                <a class="navbar-brand" href="praktika.php">Магазин</a>
                <a class="navbar-brand" href="kontakti.php">Контакти</a>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">

            <div class="col main-content-kontakti">
                <div class="text" style="margin-bottom: 200px;">
                    <h1 class="lol" style="margin-top: 60px; margin-left: 500px">Контактна інформація</h1>


                    <div class="contact-info">
                        <img src="kontakti/1.gif" alt="Гифка" style="width: 250px; height: 250px;">

                        <div class="text-1"
                            style="background-color: #fff; border: 4px solid black; padding: 10px; border-radius: 10px; width: 300px; height: 250px">
                            <h4 style="font-size: 36px;"> Адреса </h4> <br>
                            <span style="font-size: 24px;">620 E. Lake St. <br>
                                Topeka, IN 46571</span> <br>
                        </div>
                        <div class="text-2"
                            style="background-color: #fff; border: 4px solid black; padding: 10px; border-radius: 10px; width: 500px; height: 350px; margin-left: 60px">
                            <h4 style="font-size: 36px"> Години роботи</h4>
                            <br>
                            <span style="font-size: 24px">Понеділок 8:00 – 16:00 <br>
                                                            Вівторок-П'ятниця 8:00 – 17:00 <br>
                                                            Субота - тільки за попереднім записом <br>
                                                            Неділя - Вихідний <span><br>
                        </div>
                    </div>
                    <div class="contact-info-2" style="width: 100%; padding-left: 888px;">
                        <div class="text-3"
                            style="background-color: #fff; border: 4px solid black; padding: 10px; border-radius: 10px;">
                            <h4 style="font-size: 36px"> Контакти </h4>
                            <br>
                            <span style="font-size: 24px"> 
                                +7 (324) 788-56-65 <br>
                                +7 (142) 574-34-65 <br>
                                +7 (412) 124-12-13 </span> <br>
                                
                        </div>
                        <img src="kontakti/2.gif" alt="Гифка" style="width: 250px; height: 250px;">
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="cover" style="margin-bottom: 50px;">
                                <h2 class="contact" style="margin-left: 250px">Зв'язатися з нами</h2>
                                <form id="contactform">
                                    <p class="contact"><label for="name">ІМ'Я</label></p>
                                    <input id="name" name="name" placeholder="Ваше имя" required="" tabindex="1"
                                        type="text">

                                    <p class="contact"><label for="email">Email</label></p>
                                    <input id="email" name="email" placeholder="comexample@gmail.com" required=""
                                        tabindex="2" type="text">

                                    <p class="contact"><label for="Subject">Тема</label></p>
                                    <input id="subject" name="subject" placeholder="Тема сообщения" required=""
                                        tabindex="2" type="text">

                                    <p class="contact"><label for="comment">Повідомлення</label></p>
                                    <textarea name="comment" id="comment" tabindex="4"></textarea> <br>
                                    <input name="submit" id="submit" tabindex="5" value="Отправить" type="submit">
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6" style="margin-top: 60px;">
                            <div id="map-container">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56611.68671723986!2d-1.9234597770465542!3d52.466780690911726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870bdb62bfb28c9%3A0x7247bbe14b3ac5f8!2z0JrQstC40L0g0K3Qu9C40LfQsNCx0LXRgiDQpdC-0YHQv9C40YLQsNC7INCR0LjRgNC80LjQvdCz0LXQvA!5e0!3m2!1sru!2suk!4v1712832608621!5m2!1sru!2suk"
                                    width="600" height="450" style="border:0" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
    </main>
    <footer class="bottom-container">
        <img src="images/1234.png" alt="Image" class="dark-effect">
        <div class="dark-overlay"></div>
        <div class="footer-content">
            <p>© 2024 Ветеринарна кліника "Animal care clinic". </p>
            <p>Адреса м. Білгород-Дністровський, Україна</p>
            <p>Телефон: +7 (XXX) XXX-XX-XX</p>
            <p>Email: animal@gmail.com</p>
            <div class="social-links">
                <a href="#" class="social-link">Facebook</a>
                <a href="#" class="social-link">Instagram</a>
                <a href="#" class="social-link">Telegram</a>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        type="text/javascript"></script>
</body>

</html>