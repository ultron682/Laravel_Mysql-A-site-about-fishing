{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>
--}}



<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Ładowanie</title>
    @section('styles')
        <style>
            main {
                display: flex;
                /* Wyświetlaj elementy wewnątrz <main> w linii poziomej */
                justify-content: center;
                /* Wyśrodkuj elementy wewnątrz <main> wzdłuż osi poziomej */
                width: 100%;
                /* Ustaw szerokość <main> na 100% szerokości kontenera */
            }

            /* Ustawienia dla elementów potomnych klasy "content" wewnątrz <main> */
            main .content {
                display: flex;
                /* Wyświetlaj elementy wewnątrz klasy "content" w linii poziomej */
                justify-content: space-between;
                /* Rozmieść elementy wewnątrz klasy "content" równomiernie z odstępem między nimi */
                width: 90%;
                /* Ustaw szerokość elementów klasy "content" na 90% szerokości <main> */
                flex-direction: column;
                /* Ustaw układ elementów klasy "content" na pionowy */
                margin: auto;
                /* Wyśrodkuj elementy klasy "content" wewnątrz <main> */
            }

            /* Ustawienia dla elementów h2 będących potomkami klasy "content" wewnątrz <main> */
            main .content h2 {
                font-size: 40px;
                /* Ustaw rozmiar czcionki dla elementów h2 */
                color: #4b4c4c;
                /* Ustaw kolor tekstu dla elementów h2 */
                width: 100%;
                /* Ustaw szerokość elementów h2 na 100% szerokości klasy "content" */
                text-align: center;
                /* Wyśrodkuj tekst wewnątrz elementów h2 */
            }

            /* Media query aktywne dla ekranów o maksymalnej szerokości 992 pikseli */
            @media only screen and (max-width: 992px) {
                main .content {
                    flex-direction: column;
                    /* Ustaw układ elementów klasy "content" na pionowy */
                    align-items: center;
                    /* Wyśrodkuj elementy wewnątrz klasy "content" wzdłuż osi pionowej */
                    width: 95%;
                    /* Ustaw szerokość elementów klasy "content" na 95% szerokości <main> */
                }
            }

            /* SEKCJA HEADER */

            /* Styl dla nagłówka */
            .header {
                box-sizing: border-box;
                width: 100%;
                height: 80px;
                background-image: linear-gradient(to top, #ff000000, #6ebeff7e);
                display: flex;
                padding: 0 20px;
                justify-content: space-between;
                align-items: center;
            }

            /* Tytuł w nagłówku */
            .header .title {
                font-size: 30px;
                font-weight: 600;
                color: #03a9f4;
                margin: 0;
            }

            /* SEKCJA TOP NAV */

            /* Lista nawigacyjna w sekcji top-nav */
            .top-nav .top-nav ul {
                display: flex;
                margin: 0;
                list-style-type: none;
            }

            /* Elementy listy nawigacyjnej w sekcji top-nav */
            .top-nav ul li {
                cursor: pointer;
                text-decoration: none;
                text-transform: uppercase;
            }

            /* Efekt hover dla elementów listy nawigacyjnej w sekcji top-nav */
            .top-nav ul li:hover {
                color: #03a9f4;
            }

            /* SEKCJA H2 */

            /* Styl dla nagłówka H2 */
            h2 {
                vertical-align: center;
                text-align: center;
            }

            /* SEKCJA MENU */

            /* Styl dla sekcji menu */
            .top-nav {
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: space-between;
                color: #0890ff;
                font-weight: 600;
                font-size: large;
                height: 45px;
            }

            /* Lista w sekcji menu */
            .menu {
                display: flex;
                flex-direction: row;
                list-style-type: none;
                margin: 0;
                padding: 0;
            }

            /* Elementy listy w sekcji menu */
            .menu li {
                margin: 0 15px;
            }

            /* Kontener przycisku menu */
            .menu-button-container {
                display: none;
                height: 100%;
                width: 30px;
                cursor: pointer;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            /* Przełącznik menu */
            #menu-toggle {
                display: none;
            }

            /* Przycisk menu */
            .menu-button,
            .menu-button::before,
            .menu-button::after {
                display: block;
                background-color: #fff;
                position: absolute;
                height: 4px;
                width: 30px;
                transition: transform 400ms cubic-bezier(0.23, 1, 0.32, 1);
                border-radius: 2px;
                background-color: #03a9f4;
            }

            /* Styl przed przyciskiem menu */
            .menu-button::before {
                content: "";
                margin-top: -8px;
            }

            /* Styl po przycisku menu */
            .menu-button::after {
                content: "";
                margin-top: 8px;
            }

            /* Styl przycisku menu w włączonym stanie */
            #menu-toggle:checked+.menu-button-container .menu-button::before {
                margin-top: 0px;
                transform: rotate(405deg);
            }

            /* Styl przycisku menu w włączonym stanie */
            #menu-toggle:checked+.menu-button-container .menu-button {
                background: rgba(255, 255, 255, 0);
            }



            /* Styl przycisku menu w włączonym stanie */
            #menu-toggle:checked+.menu-button-container .menu-button::after {
                margin-top: 0px;
                transform: rotate(-405deg);
            }

            /* Paragrafy wewnątrz elementów listy */
            .menu>li>p {
                margin: 0;
            }

            /* MEDIA QUERY */

            /* Media query dla szerokości ekranu poniżej 1100px */
            @media (max-width: 1100px) {

                /* Wyświetlanie przycisku menu */
                .menu-button-container {
                    display: flex;
                }

                /* Styl menu na ekranach o szerokości poniżej 1100px */
                .menu {
                    position: absolute;
                    top: 0;
                    margin-top: 80px;
                    left: 0;
                    flex-direction: column;
                    width: 100%;
                    height: calc(100% - 80px);
                    align-items: center;
                    visibility: hidden;
                    z-index: 1000;
                }

                /* Efekt hover dla elementów listy włączonego menu */
                #menu-toggle~.menu li {
                    height: 0;
                    margin: 0;
                    padding: 0;
                    border: 0;
                    transition: height 400ms cubic-bezier(0.23, 1, 0.32, 1);
                }

                /* Styl elementów listy włączonego menu */
                #menu-toggle:checked~.menu li {
                    border: 1px solid #333;
                    height: 20%;
                    padding: 0.5em 0;
                    transition: height 400ms cubic-bezier(0.23, 1, 0.32, 1);
                    text-align: center;
                }

                /* Wyświetlanie menu po włączeniu przycisku */
                #menu-toggle:checked~.menu {
                    visibility: visible;
                }

                /* Styl elementów listy menu */
                .menu>li {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin: 0;
                    padding: 0.5em 0;
                    width: 100%;
                    color: white;
                    background-color: #48adff;
                }

                /* Styl co drugiego elementu listy menu */
                .menu>li:nth-child(even) {
                    color: #000000;
                }
            }


            /* SEKCJA FOOTER CONTENT */

            /* Styl dla elementu footerContent */
            .footerContent {
                display: flex;
                justify-content: space-around;
                align-items: center;
                width: 100%;
                background-color: #184f74;
                flex-direction: row;
            }

            /* MEDIA QUERY */

            /* Media query dla szerokości ekranu poniżej 768px */
            @media only screen and (max-width: 768px) {

                /* Zmiana układu elementu footerContent na kolumnowy */
                .footerContent {
                    flex-direction: column;
                }

                /* Zmiana szerokości elementu .footerContent .desc .social */
                .footerContent .desc .social {
                    width: 50%;
                }
            }

            /* Media query dla szerokości ekranu poniżej 768px i orientacji portrait */
            @media only screen and (max-width: 768px) and (orientation: portrait) {

                /* Zmiana szerokości elementu .footerContent .desc .social */
                .footerContent .desc .social {
                    width: 55%;
                }
            }

            /* SEKCJA TYTUŁU */

            /* Styl dla tytułu w elemencie footerContent */
            .footerContent .title {
                font-size: 30px;
                font-weight: 600;
                color: #03a9f4;
                margin: 0;
            }

            /* SEKCJA REKLAMY */

            /* Styl dla sekcji reklamy w elemencie footerContent */
            .footerContent .ad {
                display: flex;
                justify-content: center;
                flex-direction: column;
                align-items: center;
            }

            /* Styl dla tytułu w sekcji reklamy */
            .footerContent .ad h2 {
                color: #0192d7;
                font-size: 22px;
                line-height: 120%;
                text-align: center;
            }

            /* Styl dla szczegółów w tytule sekcji reklamy */
            .footerContent .ad h2 .detail {
                font-weight: bold;
                color: #fff;
            }

            /* Styl dla linku w sekcji reklamy */
            .footerContent .ad a {
                display: flex;
                justify-content: center;
                text-decoration: none;
                color: #fff;
            }

            /* Styl dla obrazka w linku sekcji reklamy */
            .footerContent .ad a img {
                width: 80%;
            }

            /* SEKCJA OPISU */

            /* Styl dla sekcji opisu w elemencie footerContent */
            .footerContent .desc {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                color: #0192d7;
                margin-top: 10px;
            }

            /* Styl dla sekcji mediów społecznościowych w sekcji opisu */
            .footerContent .desc .social {
                display: flex;
                justify-content: space-between;
                text-align: center;
                margin-bottom: 10px;
                width: 80%;
            }

            /* Styl dla linków do mediów społecznościowych w sekcji opisu */
            .footerContent .desc .social a {
                display: flex;
                justify-content: center;
            }

            /* Styl dla obrazków w linkach do mediów społecznościowych w sekcji opisu */
            .footerContent .desc .social a img {
                width: 30px;
                cursor: pointer;
            }
        </style>
    @show
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" type="text/css" href="./CSS/normalize.css" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- lokalne skrypty, wszystkie funkcje zawarte są w tych dwóch plikach -->
    <script src="./JS/main.js"></script>
    <script src="./JS/Storage.js"></script>

    <!-- Bootstrap style css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />

    <!-- Bootstrap i jQuery pliki java script (np potrzebne do galerii na stronie głównej) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <!-- Lightbox -->
    <link href="./CSS/lightbox.css" rel="stylesheet" />
    <script src="./JS/lightbox.js"></script>
    <!-- Wybranie odpowiednich opcji dla lightbox'a (podstrona o polecanych narzędziach) -->
    <script>
        lightbox.option({
            resizeDuration: 200,
            fadeDuration: 200,
            wrapAround: true,
            albumLabel: "%1 z %2",
            alwaysShowNavOnTouchDevices: true,
        });
    </script>
</head>

<body>



    {{-- @include('layouts.navigation') --}}

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif
    <!-- Sekcja nagłówka strony -->
    <header class="header">
        <p class="title">Wędkarz GURU</p>

        <nav class="top-nav">
            <!-- Przełącznik menu -->
            <input id="menu-toggle" type="checkbox" />
            <!-- Przycisk menu -->
            <label class="menu-button-container" for="menu-toggle">
                <div class="menu-button"></div>
            </label>
            <!-- Lista elementów menu -->
            <ul class="menu">
                <li id="link1">
                    <a href='home'>
                        <p>STRONA GŁÓWNA</p>
                    </a>
                </li>
                <li id="link2">
                    <a href='aboutus'>
                        <p>O NAS</p>
                    </a>
                </li>
                <li id="link3">
                    <a href='tools'>
                        <p>POLECANE NARZĘDZIA</p>
                    </a>
                </li>
                <li id="link4">
                    <a href='faq'>
                        <p>CZĘSTE PYTANIA</p>
                    </a>
                </li>
                <li id="link5">
                    <a href='contact'>
                        <p>KONTAKT</p>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Główna treść strony -->
    <main id="pageContainer">
        @yield('content')
    </main>

    <!-- Stopka strony -->
    <footer>
        <div class="footerContent">
            <p class="title">Wędkarz GURU</p>
            <div class="ad">
                <!-- Link do autora strony -->
                <a href="https://github.com/ultron682"></a>
                <h2>
                    Stworzone i rozwijane przez
                    <span class="detail">Michała Mazura</span> z grupy 5.6
                </h2>
                <!-- Link do profilu autora na GitHub -->
                <a href="https://github.com/ultron682">https://github.com/ultron682</a>
                <!-- Link do strony "Skąd pomysł na stronę?" -->
                <a href="./skadPomysl.html">Skąd pomysł na stronę?</a>
            </div>

            <div class="desc">
                <section class="social">
                    <!-- Linki do mediów społecznościowych -->
                    <a href="#" target="_blank"><img alt="zdjecie" src="./img/follow_icon1.png" /></a>
                    <a href="#" target="_blank"><img alt="zdjecie" src="./img/follow_icon2.png" /></a>
                    <a href="#" target="_blank"><img alt="zdjecie" src="./img/follow_icon3.png" /></a>
                    <a href="#" target="_blank"><img alt="zdjecie" src="./img/follow_icon4.png" /></a>
                </section>
                <!-- Adres strony -->
                <p>Nadbystrzycka 16 Lublin 20-612</p>
            </div>
        </div>
    </footer>
</body>

</html>
