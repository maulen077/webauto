<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Auto</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
<div class="wrapper">
    <header class="header header-main">
        <div class="container">
            <div class="header__inner">
                <a class="logo" href="#">
                    <img class="logo__img" src="images/logo.svg" alt="">
                </a>
                <nav class="menu">
                    <ul clas="menu__list">
                        <li class="menu__list-item">
                            <a class="menu__list-link" href="#">CATALOG</a>
                        </li>
                        <li class="menu__list-item">
                            <a class="menu__list-link" href="#">CATEGORY</a>
                        </li>
                        <li class="menu__list-item">
                            <a class="menu__list-link" href="contacts.html">CONTACT US</a>
                        </li>
                        <li class="menu__list-item">
                            <a class="menu__list-link" href="#">SEARCH</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main class="main">
        <section class="contacts">
            <div class="container">
                <h2 class="section-title contacts__title">Contact Us</h2>
                <p class="contacts__text">
                    contact us if you have quiestions!
                </p>
                <form class="form" action="{{ route('contacts.submit') }}" method="POST">
                    @csrf
                    <input class="form__input" type="text" name="name" placeholder="Name">
                    <input class="form__input" type="text" name="email" placeholder="E-mail">
                    <textarea class="form__textarea" name="message" placeholder="Your text"></textarea>
                    <button class="form__btn" type="submit">SUBMIT</button>
                </form>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <nav class="footer__menu">
                <ul class="footer__menu-list">
                    <li class="footer__menu-item">
                        <p class="footer__menu-title">Products</p>
                    </li>
                    <li class="footer__menu-item">
                        <a class="footer__menu-link" href="#">New</a>
                    </li>
                    <li class="footer__menu-item">
                        <a class="footer__menu-link" href="#">Electro</a>
                    </li>
                    <li class="footer__menu-item">
                        <a class="footer__menu-link" href="#">Used</a>
                    </li>
                </ul>
                <ul class="footer__menu-list">
                    <li class="footer__menu-item">
                        <p class="footer__menu-title">Resources</p>
                    </li>
                    <li class="footer__menu-item">
                        <a class="footer__menu-link" href="#">Blog</a>
                    </li>
                    <li class="footer__menu-item">
                        <a class="footer__menu-link" href="#">FAQ</a>
                    </li>
                    <li class="footer__menu-item">
                        <a class="footer__menu-link" href="#">Contact us</a>
                    </li>
                </ul>
                <ul class="footer__menu-list">
                    <li class="footer__menu-item">
                        <p class="footer__menu-title">About</p>
                    </li>
                    <li class="footer__menu-item">
                        <a class="footer__menu-link" href="#">About us</a>
                    </li>
                    <li class="footer__menu-item">
                        <a class="footer__menu-link" href="#">Team</a>
                    </li>
                    <li class="footer__menu-item">
                        <a class="footer__menu-link" href="#">Careers</a>
                    </li>
                </ul>
            </nav>
            <div class="footer__copy">
                <p class="footer__copy-text">
                    По вопросам о службе покупки автомобилей CarMotor звоните по телефону 8-747-747-1998.
                    Заходя на этот веб-сайт, вы соглашаетесь с Условиями обслуживания
                    и Политикой конфиденциальности CarMotor.
                </p>
            </div>
            <!---<nav class="copy__nav">
                <ul class="copy__nav-list">
                    <li class="copy__nav-item">
                        <a class="copy__nav-link" href="#">Условия предоставления услуг</a>
                    </li>
                    <li class="copy__nav-item">
                        <a class="copy__nav-link" href="#">Политика конфиденциальности</a>
                    </li>
                    <li class="copy__nav-item">
                        <a class="copy__nav-link" href="#">Не продавать мою личную информацию</a>
                    </li>
                </ul>
            </nav> -->
        </div>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>

