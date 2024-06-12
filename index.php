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
    <div class="head-container" style="margin-bottom: 60px; display: flex;">
        <div style="flex: 1;">
            <br>
            <p style="font-size: 50px; margin-top: 20px; margin-left: 20px;">Якісна ветеринарна допомога за доступною
                ціною.</p>
            <p style="font-size: 16px;">Наша місія полягає у наданні високоякісних медичних послуг вашим домашнім
                улюбленцям.
                Завдяки нашому досвіду та професіоналізму ми забезпечуємо повний спектр лікувально-діагностичних
                процедур для собак, котів, птахів та інших домашніх тварин.</p>
        </div>
        <div style="flex: 1;">
            <img src="12.png" alt="Фото" style="max-width: 100%; height: auto;">
        </div>
    </div>

    <div class="banner-container-3">
        <div class="banner-content-3">
            <div class="odf-1">
                <h1><b>Наші</b> Послуги</h1>
                <?php include 'nashiposlugi.php'; ?>
                <div class="divider"> </div>
                <div class="content">
                    <h6>Наша ветеринарна клініка пропонує повний спектр послуг для вашого улюбленця,
                        включаючи медичні огляди, вакцинацію, лікування хвороб та травм, хірургічні втручання,
                        стоматологію,
                        офтальмологію та ортопедію. Наші досвідчені ветеринарні лікарі забезпечують індивідуальний
                        підхід до
                        кожного пацієнта та надають якісну та професійну допомогу в будь-яких ситуаціях. </h6>.
                </div>
            </div>

        </div>
    </div>
    <main>
        <div class="container">
            <div class="pro-nas">
                <div class="title" style="margin-top: 30px;">ПРО НАС</div>
                <div class="divider"></div>
                <div class="content"> Якісна ветеринарна допомога за доступною ціною. </div>
                <div class="content">Наша ветеринарна клініка побудована на основах професіоналізму, турботи, чесності та доступності. Ці цінності залишаються незмінними з моменту відкриття в 1989 році доктором Джеффом Кінгом. Сім'я Кінгів, протягом трьох поколінь і понад 60 років (починаючи з батька доктора Кінга в 1959 році), прагне надавати найвищу якість догляду як для ваших домашніх улюбленців, так і для великих тварин.

Ми пишаємося своєю репутацією та тим, що наші клієнти подорожують до нас з різних куточків країни, довіряючи нам здоров'я своїх чотирилапих членів родини та худоби. Ми розуміємо, наскільки важливими є ваші тварини для вас, тому робимо все можливе, щоб забезпечити їм найкращий догляд та лікування.

У нашій клініці працює висококваліфікована команда ветеринарів та медичних працівників, які завжди готові прийти на допомогу. Ми використовуємо сучасне обладнання та передові методики лікування, щоб гарантувати вашій тварині швидке одужання та комфорт під час перебування в нашій клініці.

Довірте нам здоров'я своїх улюбленців – ми з радістю допоможемо вам дбати про них. Наша клініка – це місце, де кожна тварина отримує індивідуальний підхід та максимальну увагу.





</div>
            </div>
            <div class="banner-container-2">
                <div class="banner-content-2" style="margin-left: 55px;">
                    <div class="additional-content" style="margin-top: 50px;">
                        <h2>НАШ ОНЛАЙН МАГАЗИН</h2>
                        <p>Заходьте в наш інтернет-магазин для покупки ліків та приладдя для домашніх тварин.</p>
                        <a href="praktika.php">
                            <img src="photo/STORE.png" alt="Online Store Image">
                        </a>
                        <p><b> Ми пропонуємо послугу Hill's to Home, яка дозволяє вам замовляти ліки для ваших домашніх
                            улюбленців прямо з дому. Доставка здійснюється безкоштовно прямо до ваших дверей!</b></p>
                    </div>
                </div>
            </div>

            <div class="banner-container-2">
                <div class="banner-content-2" style="margin-left: 55px;">
                    <div class="text" style="margin-bottom: 200px;">
                        <h1 class="lol" style="margin-top: 60px; margin-left: 700px">Контактна інформація</h1>


                        <div class="contact-info" style="margin-left: 100px;">
                            <img src="kontakti/1.gif" alt="Гифка" style="width: 250px; height: 250px;">

                            <div class="text-1"
                                style="background-color: #fff; border: 4px solid black; padding: 10px; border-radius: 10px; width: 300px; height: 250px">
                                <h4 style="font-size: 36px;"> Адреса </h4> <br>
                                <span style="font-size: 24px;">620 E. Lake St. <br>
                                    Topeka, IN 46571</span> <br>
                            </div>
                            <div class="text-2"
                                style="background-color: #fff; border: 4px solid black; padding: 10px; border-radius: 10px; width: 500px; height: 350px; margin-left: 20px">
                                <h4 style="font-size: 36px"> Години прийому </h4>
                                <br>
                                <span style="font-size: 24px">Monday 8:00 am – 4:00 pm <br>
                                    Tuesday-Friday 8:00 am - 5:00 pm <br>
                                    Saturday Limited hours--by appt only <br>
                                    Sunday Closed <span><br>
                            </div>
                            <div class="text-"
                                style="margin-left: 20px; background-color: #fff; border: 4px solid black; padding: 10px; border-radius: 10px;">
                                <h4 style="font-size: 36px"> Наші контакти </h4>
                                <br>
                                <span style="font-size: 24px">+7 (141) 342-53-21 <br>
                                                              +7 (123) 515-51-22 <br>
                                                              +7 (324) 441-11-11 </span> <br>

                            </div>
                            <img src="kontakti/2.gif" alt="Гифка" style="width: 250px; height: 250px;">
                        </div>
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
    <script src="banner.js" type="text/javascript"></script>
</body>

</html>