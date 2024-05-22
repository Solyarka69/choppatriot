<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="header-inner">
                    <a href="index.html" class="logo"><img src="/images/logo-img.svg" alt="" class="logo-img"></a>
                    <nav class="menu">
                        <button class="menu-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <ul class="menu-list">
                            <li class="menu-list-item"><a href="services.html" class="menu-list-item-link">УСЛУГИ</a>
                            </li>
                            <li class="menu-list-item"><a href="partners.html" class="menu-list-item-link">ПАРТНЕРЫ</a>
                            </li>
                            <li class="menu-list-item"><a href="blogs.html" class="menu-list-item-link">БЛОГ</a></li>
                            <!-- <li class="menu-list-item"><a href="#" class="menu-list-item-link">ЧТО-ТО ЕЩЁ</a></li> -->
                            <li class="menu-list-item"><a href="contacts.html"
                                    class="menu-list-item-link menu-list-item-link--active">КОНТАКТЫ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <main class="main">
            <section class="contacts">
                <div class="container">
                    <h2 class="section-title contacts-title">Свяжись с нами</h2>
                    <p class="contacts-text">Если у вас есть какие-либо вопросы, вы можете связаться с нами, опишите
                        ниже ваш вопрос</p>
                    <form id="form" class="form" action="add-message.php" method="POST">
                        <input type="text" id="input-name" class="form-input" placeholder="Имя">
                        <input type="email" id="input-mail" class="form-input" placeholder="Email">
                        <textarea id="input-message" class="form-textarea" placeholder="Ваше сообщение"></textarea>
                        <button type="submit" class="form-btn">Отправить</button>
                    </form>
                </div>
            </section>
            <section class="blog">
                <div class="container">
                    <div class="blog-items">
                        <div class="blog-item">
                            <img class="blog-item-img" src="images/blog-item1.jpg" alt="">
                            <h4 class="blog-item-title">Технические средства охраны</h4>
                            <a href="blog-1.html" class="blog-item-link" target="_blank">читать</a>
                        </div>
                        <div class="blog-item">
                            <img class="blog-item-img" src="images/blog-item2.jpg" alt="">
                            <h4 class="blog-item-title">Что такое ГБР и когда необходима?</h4>
                            <a href="blog-2.html" class="blog-item-link" target="_blank">читать</a>
                        </div>
                    </div>
                    <a href="blogs.html" class="show-more-link">Показать ещё</a>
                </div>
            </section>
        </main>
        <footer class="footer">
            <div class="container">
                <nav class="footer-menu">
                    <ul class="footer-menu-list">
                        <li class="footer-menu-item">
                            <p class="footer-menu-title">Продукты</p>
                        </li>
                        <li class="footer-menu-item"><a href="services.html" class="footer-menu-item-link">Услуги</a>
                        </li>
                        <!-- <li class="footer-menu-item"><a href="#" class="footer-menu-item-link">Lorem ipsum</a></li> -->
                        <!-- <li class="footer-menu-item"><a href="#" class="footer-menu-item-link">Lorem ipsum</a></li> -->
                    </ul>
                    <ul class="footer-menu-list">
                        <li class="footer-menu-item">
                            <p class="footer-menu-title">Ресурсы</p>
                        </li>
                        <li class="footer-menu-item"><a href="blogs.html" class="footer-menu-item-link">Блог</a></li>
                        <li class="footer-menu-item"><a href="#" class="footer-menu-item-link">FAQ</a></li>
                        <li class="footer-menu-item"><a href="contacts.html" class="footer-menu-item-link">Написать нам</a>
                        </li>
                    </ul>
                    <ul class="footer-menu-list">
                        <li class="footer-menu-item">
                            <p class="footer-menu-title">Работайте с нами</p>
                        </li>
                        <li class="footer-menu-item"><a
                                href="https://yandex.ru/maps/org/patriot/1730539061/?ll=44.484058%2C48.693571&mode=search&sctx=ZAAAAAgBEAAaKAoSCQHcLF4sQkZAESkGSDSBWkhAEhIJTl5kAn6N3z8ReouH9xxYyD8iBgABAgMEBSgKOABAxlVIAWoCcnWdAc3MTD2gAQCoAQC9ASKNnALCAQW13Je5BoICFdGH0L7QvyDQv9Cw0YLRgNC40L7RgooCAJICAJoCDGRlc2t0b3AtbWFwcw%3D%3D&sll=44.484058%2C48.693571&sspn=0.123253%2C0.047560&text=%D1%87%D0%BE%D0%BF%20%D0%BF%D0%B0%D1%82%D1%80%D0%B8%D0%BE%D1%82&z=14"
                                class="footer-menu-item-link" target="_blank">Офисы</a></li>
                        <li class="footer-menu-item"><a href="partners.html" class="footer-menu-item-link">Партнеры</a></li>
                    </ul>
                    <ul class="footer-menu-list">
                        <li class="footer-menu-item">
                            <p class="footer-menu-title">О Нас</p>
                        </li>
                        <li class="footer-menu-item"><a href="#" class="footer-menu-item-link">О компании</a></li>
                        <li class="footer-menu-item"><a href="#" class="footer-menu-item-link">Команда</a></li>
                        <li class="footer-menu-item"><a href="#" class="footer-menu-item-link">Достижения</a></li>
                    </ul>
                </nav>
                <ul class="footer-app">
                    <li class="footer-app-item"><a href="#" class="footer-app-item-link"><img class="app-item-img"
                                src="images/appstore.svg" alt=""></a></li>
                    <li class="footer-app-item"><a href="#" class="footer-app-item-link"><img class="app-item-img"
                                src="images/googleplay.svg" alt=""></a></li>
                </ul>
                <div class="footer-copy">
                    <p class="footer-copy-text">
                        Связаться с нами также можно по номеру телефона: 8-800-555-35-35
                    </p>
                    <p class="footer-copy-text">
                        Данный сайт сделан студентом 4 курса ВолгГТУ Архиповым Никитой Алексеевичем
                    </p>
                    <nav class="footer-copy-nav">
                        <ul class="copy-nav-list">
                            <li class="copy-nav-item"><a href="#" class="copy-nav-item-link">Terms of Service</a></li>
                            <li class="copy-nav-item"><a href="#" class="copy-nav-item-link">Privacy Policy</a></li>
                            <li class="copy-nav-item"><a href="#" class="copy-nav-item-link">Do Not Sell My Personal
                                    Information</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </footer>
    </div>
    <script src="js/main.js"></script>
    <script src="js/contact_us.js"></script>
</body>

</html>