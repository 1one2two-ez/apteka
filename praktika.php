<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Магазин</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
            <a class="navbar-brand" style="margin-left: 250px;" href="golovna.php">На головну</a>
            </form>
            <a class="navbar-brand" style="margin-right: 250px;" href="#">Аккаунт</a>
        </nav>
        <div class="head-container">
    <p style="font-size: 16px;">ЛАСКАВО ПРОСИМО ДО НАШОГО МАГАЗИНУ!</p>
    <p style="font-size: 50px;">Замовляйте медикаменти для свого <b> улюбленця </b> <br> зручно з дому </p>
    <p style="font-size: 20px;">Ми зробили процес поповнення та замовлення нових медикаментів ще зручнішим завдяки нашому онлайн-магазину.</p>
</div>
    </header>
    <main>
        <div class="container">
                
        <div class="odf-1">
        <h1><b>Категорії</b> товарів</h1>
        <?php include 'categoryphp.php';?>
        </div>
           <div class="odf-2">
                <h1><b>Популярні</b> товари</h1>
                <?php include 'tovarmain.php';?>
                <h1><b>Захист від блох і кліщів</b></h1>
                <?php include 'TOVARI-BAZA/category-1/tovar-cat-1.php';?>
                <h1><b>Захист від серцевих червів</b> </h1>
                <?php include 'TOVARI-BAZA/category-2/tovar-cat-2.php';?>
                <h1><b>Лікування артриту та знеболення</b> </h1>
                <?php include 'TOVARI-BAZA/category-3/tovar-cat-3.php';?>
                <h1><b>Антибіотики</b></h1>
                <?php include 'TOVARI-BAZA/category-4/tovar-cat-4.php';?>
                <h1><b>Засоби для полегшення алергічних реакцій</b></h1>
                <?php include 'TOVARI-BAZA/category-5/tovar-cat-5.php';?>
                <h1><b>Здоров'я зубів і порожнини рота</b></h1>
                <?php include 'TOVARI-BAZA/category-6/tovar-cat-6.php';?>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>