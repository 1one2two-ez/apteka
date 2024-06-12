<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Головна</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css">
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
            <div class="col main-content-likari">
                <h1> Наші <b> лікарі</b> </h1>
                <?php include 'likari.php';?>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>