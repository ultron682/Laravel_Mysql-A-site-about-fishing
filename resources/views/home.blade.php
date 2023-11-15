@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="PageMain">
            <h2>Wędkarstwo</h2>

            <!--Carousel Wrapper-->
            <div id="carousel-main" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-main" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-main" data-slide-to="1"></li>
                    <li data-target="#carousel-main" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="view">
                            <img class="d-block w-100" src="./img/pageMain/1.jpg" alt="First slide" />
                            <div class="mask rgba-black-light"></div>
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive">Pasja?</h3>
                            <p>Czy marzenie?</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view">
                            <img class="d-block w-100" src="./img/pageMain/2.jpg" alt="Second slide" />
                            <div class="mask rgba-black-strong"></div>
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive">Zdecydowanie bajka!</h3>
                            <p>U nas znajdziesz to czego potrzebujesz!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view">
                            <img class="d-block w-100" src="./img/pageMain/3.jpg" alt="Third slide" />
                            <div class="mask rgba-black-slight"></div>
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive">
                                Rozsiądź się wygodnie i wsłuchaj się w szum
                            </h3>
                            <p>Taaak właśnie tak</p>
                        </div>
                    </div>
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-main" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-main" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->

            <h3>
                Wędkarstwo to nie tylko pasja, ale także styl życia. Nasza strona
                poświęcona jest temu pięknemu hobby i zawiera wiele cennych informacji dla
                początkujących i doświadczonych wędkarzy.
            </h3>
            <h3>
                Znajdziesz tu poradniki dotyczące wyboru odpowiedniego sprzętu
                wędkarskiego, technik połowu różnych gatunków ryb oraz informacje na temat
                najpiękniejszych miejsc do wędkowania w Polsce i na świecie. Omawiamy
                podstawowe techniki połowu, wyjaśniamy różnice między różnymi typami wędek
                i rozwiewamy najczęstsze wątpliwości dotyczące wyboru odpowiedniego
                sprzętu.
            </h3>
            <h3>
                Doświadczonych wędkarzy zachęcamy do zapoznania się z naszymi poradnikami
                poświęconymi technikom połowu konkretnych gatunków ryb, takich jak karp,
                szczupak czy sandacz. Przygotowaliśmy również wiele szybkich odpowiedzi
                dotyczących wędkarskich pytań.
            </h3>
            <h3>
                Na naszej stronie znajdziesz również wiele cennych uwag dla wędkarzy,
                gdzie można poznać porady i informację na temat najnowszych trendów w
                wędkarstwie.
            </h3>
            <h3>
                Zapraszamy na naszą stronę, aby odkryć świat wędkarstwa i cieszyć się
                pięknem natury podczas wspaniałych wędkarskich wypraw!
            </h3>
        </div>
    </div>
@endsection

@section('styles')
    @parent
    <style>
        .PageMain #carousel-main {
            width: 50%;
            /* Szerokość ustawiona na 50% */
            margin: auto;
            /* Wyśrodkowanie elementu na stronie */
        }

        /* Media query dla szerokości ekranu o maksymalnej wartości 992 pikseli */
        @media (max-width: 992px) {

            /* Stylowanie elementu o identyfikatorze "carousel-main" wewnątrz klasy "PageMain" */
            .PageMain #carousel-main {
                width: 100%;
                /* Szerokość ustawiona na 100% */
                margin: auto;
                /* Wyśrodkowanie elementu na stronie */
            }
        }

        .carousel-caption h3,
        .carousel-caption p {
            color: rgb(255, 255, 255);
            /* Kolor tekstu ustawiony na biały */
            text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;
            /* Cień tekstu */
        }

        .w-100 {
            border-radius: 10px;
            /* Zaokrąglenie rogów o promieniu 10 pikseli */
        }
    </style>
@endsection
