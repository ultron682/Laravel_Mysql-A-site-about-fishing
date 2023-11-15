@extends('layouts.app')

@section('content')
<div class="content">
    <div class="about-us">

        <div class="oneColumn">
            <img src="./img/aboutus.jpg" alt="">
        </div>

        <div class="oneColumn">
            <h2>O nas</h2>
            <p class="text">
                Część główna podstrony "O nas" opisuje naszą misję, cele i
                filozofię
                działania. Przedstawiamy tutaj nasze zaangażowanie w rozwijanie
                tej
                dziedziny i zwiększanie świadomości na temat ochrony zasobów
                wodnych.

                Sekcje z trzema podpunktami obejmują następujące tematy: naszą
                historię, nasze wartości oraz zespół. W sekcji "Nasza historia"
                prezentujemy nasze doświadczenia i etapy rozwoju firmy, które
                przyczyniły się do jej sukcesu. W sekcji "Nasze wartości"
                przedstawiamy nasze najważniejsze cele i wartości, które są
                naszymi
                fundamentami. W ostatniej sekcji, "Nasz zespół", przedstawiamy
                naszych pracowników i opisujemy ich doświadczenie, umiejętności
                oraz
                role, jakie pełnią w naszej firmie.

                Inna sekcja podstrony "O nas" poświęcona jest naszym klientom i
                współpracownikom. Przedstawiamy tutaj naszą ofertę, jakie
                korzyści
                oferujemy naszym klientom oraz jak dbamy o naszych partnerów
                biznesowych. Opisujemy nasze zaangażowanie w tworzenie
                pozytywnych
                relacji z naszymi klientami i partnerami oraz podajemy przykłady
                naszych dotychczasowych sukcesów.

                Zapraszamy na naszą stronę internetową, aby poznać lepiej naszą
                firmę i pasję, jaką łączy nas z wędkarstwem.
            </p>

            <div class="choose-us">
                <h2>Oto trzy powody, dla których warto zdecydować się na
                    wędkowanie:</h2>
                <div class="boxsContainer">
                    <div class="box">
                        <div class="step">
                            <div class="circle">
                                <span class="advantage">1</span>
                            </div>
                        </div>
                        <p>Relaks i odpoczynek na świeżym powietrzu - Wędkowanie
                            pozwala
                            na
                            spędzenie czasu na łonie natury, z dala od
                            miejskiego
                            zgiełku i
                            codziennych obowiązków. Jest to doskonały sposób na
                            relaks i
                            odprężenie się, a także na obcowanie z pięknymi
                            krajobrazami
                            i
                            dziką przyrodą.</p>
                    </div>
                    <div class="box">
                        <div class="step">
                            <div class="circle">
                                <span class="advantage">2</span>
                            </div>
                        </div>
                        <p>Nowe wyzwania i emocje - Każda wyprawa wędkarska to
                            nowe
                            wyzwanie
                            i szansa na zdobycie emocji. Łowienie ryb to nie
                            tylko
                            sposób na
                            spędzenie czasu, ale także okazja do poznania nowych
                            gatunków
                            ryb i technik połowowych. Udało Ci się złapać
                            wymarzonego
                            okonia? To już jest powód do dumy i radości!</p>
                    </div>
                    <div class="box">
                        <div class="step">
                            <div class="circle">
                                <span class="advantage">3</span>
                            </div>
                        </div>
                        <p>Możliwość spędzenia czasu z rodziną i przyjaciółmi -
                            Wędkowanie
                            to doskonała forma spędzania czasu z rodziną i
                            przyjaciółmi.
                            Można łowić ryby, rozmawiać, śmiać się i cieszyć
                            wspólnie
                            spędzonym czasem. To także doskonała okazja do
                            uczenia
                            się
                            od
                            siebie nawzajem i dzielenia się swoimi
                            doświadczeniami
                            wędkarskimi.</p>
                    </div>
                </div>
            </div>

            <div class="advantages">
                <h2>Nasze zalety</h2>
                <ul>
                    <li><p>Relaks i odpoczynek - Wędkowanie pozwala na spędzenie
                            czasu
                            na łonie natury, co z kolei sprzyja relaksowi i
                            odpoczynkowi.</p></li>
                    <li><p>Kontakt z naturą - Wędkarstwo pozwala na kontakt z
                            przyrodą,
                            obserwowanie różnych gatunków ryb i ptaków, co
                            zwiększa
                            świadomość ekologiczną i szacunek dla środowiska
                            naturalnego.</p></li>
                    <li><p>Wspólna zabawa - Wędkowanie może być świetnym
                            sposobem
                            na
                            spędzenie czasu z rodziną lub przyjaciółmi.</p></li>
                    <li><p>Aktywność fizyczna - Wędkowanie wymaga ruchu i
                            aktywności
                            fizycznej, co może być korzystne dla zdrowia.</p></li>
                    <li><p>Łowienie własnej żywności - Wędkowanie może być
                            sposobem
                            na
                            zdobycie świeżych, zdrowych ryb do spożycia.</p></li>
                    <li><p>Poprawa umiejętności - Wędkowanie wymaga nauki i
                            doskonalenia technik, co może wpłynąć pozytywnie na
                            rozwój
                            umiejętności i cierpliwości.</p></li>
                </ul>
            </div>

        </div>


    </div>
</div>





@endsection

@section('styles')
    @parent
    <style>
/* SEKCJA O NAS */

/* Styl dla obrazka w sekcji "about-us" */
.about-us img {
    width: 100%;
    padding: 10px 0;
    border-radius: 25% 5%;
}

/* Styl dla sekcji "about-us" */
.about-us {
    color: #00405e;
    display: flex;
    flex-direction: row;
}

/* Styl dla jednej kolumny w sekcji "about-us" */
.oneColumn {
    width: 50%;
    padding: 0 50px;
}

/* Styl dla kontenera pudełek w sekcji "choose-us" w sekcji "about-us" */
.about-us .choose-us .boxsContainer {
    display: flex;
    align-items: center;
    width: 100%;
}

/* Styl dla paragrafów w sekcji "about-us" */
.about-us p {
    font-size: large;
}

/* MEDIA QUERY */

/* Media query dla szerokości ekranu poniżej 1292px */
@media only screen and (max-width: 1292px) {
    /* Zmiana układu kontenera pudełek w sekcji "choose-us" na kolumnowy */
    .about-us .choose-us .boxsContainer {
        flex-direction: column;
    }

    /* Zmiana układu sekcji "about-us" na kolumnowy */
    .about-us {
        flex-direction: column;
    }

    /* Zmiana szerokości jednej kolumny na 100% */
    .oneColumn {
        width: 100%;
        padding: 0;
    }
}

/* SEKCJA WYBIERZ NAS */

/* Styl dla pudełek w sekcji "choose-us" w sekcji "about-us" */
.about-us .choose-us .box {
    display: flex;
    align-items: center;
    width: 100%;
}

/* Styl dla kółka w pudełku w sekcji "choose-us" w sekcji "about-us" */
.about-us .choose-us .box .circle {
    width: 69px;
    color: #4b4c4c;
    background: #00acfc;
    margin: 0 20px;
    border-radius: 100%;
}

/* Styl dla elementu po kółku w pudełku w sekcji "choose-us" w sekcji "about-us" */
.about-us .choose-us .box .circle:after {
    content: "";
    display: block;
    padding-bottom: 100%;
}

/* Styl dla tekstu w kółku w pudełku w sekcji "choose-us" w sekcji "about-us" */
.about-us .choose-us .box .circle .advantage {
    position: absolute;
    display: flex;
    justify-content: center;
    width: 69px;
    height: 69px;
    align-items: center;
    font-size: 48px;
}

/* Styl dla paragrafów w pudełku w sekcji "choose-us" w sekcji "about-us" */
.about-us .choose-us .box p {
    line-height: 120%;
}

/* Styl dla listy zalet w sekcji "advantages" w sekcji "about-us" */
.about-us .advantages ul {
    list-style-image: url

("../img/list_arrow.png");
    list-style-position: inside;
    padding: 0;
}

/* Styl dla elementów listy zalet w sekcji "advantages" w sekcji "about-us" */
.about-us .advantages ul li {
    line-height: 1.4;
    text-transform: uppercase;
    overflow: hidden;
    margin-bottom: 10px;
    text-align: justify;
}
    </style>
@endsection
