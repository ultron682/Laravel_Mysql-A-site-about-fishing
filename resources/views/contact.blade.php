@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="contact">
            <h2>Szybkie info</h2>
            <h3>Aktualne informacje kontaktowe zawsze znajdziesz poniżej:</h3>

            <div class="shortInfo">
                <ul>
                    <li>Email: wedka@wedkarstwo.com</li>
                    <li>Numer kontaktowy: 491413370</li>
                    <li>FAX: wedka@wedka.wedka.pl</li>
                    <li>Adres siedziby: Nadbystrzycka 16 Lublin 20-612</li>
                </ul>
            </div>

            @if (\Session::has('success'))
                <div>
                    <h2 style="color: green">Zapisano zgłoszenie!!</h2>
                </div>
            @endif

            <h2>Formularz zgłoszenia</h2>
            <form role="form" method="post" action="{{ route('contact.store') }}" id="contact-form"
                enctype="multipart/form-data" onsubmit="return submitForm(this);">
                {{ csrf_field() }}
                <h4>Zacznijmy od początku... Czego dotyczy zgłoszenie?</h4>
                <div class="form-check">
                    <input class="form-check-input" id="fix" type="radio" name="reportType" />
                    <label class="form-check-label" for="fix">Poprawa literówki/błędu na stronie</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" id="placement" type="radio" name="reportType" />
                    <label class="form-check-label" for="placement">Lokowanie produktu</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" checked id="contact" type="radio" name="reportType" />
                    <label class="form-check-label" for="contact">Inne</label>
                </div>

                <h4>Twoje podstawowe dane</h4>
                <table>
                    <tr>
                        <td><label for="imie">Imię: </label></td>
                        <td>
                            <input class="form-control" onchange="onFormElementChange()" id="imie" name="imie"
                                type="text" maxlength="20" size="30" />
                        </td>
                        <td class="error">Wpisz poprawne Imię!</td>
                    </tr>
                    <tr>
                        <td><label for="naz">Nazwisko: </label></td>
                        <td>
                            <input class="form-control" onchange="onFormElementChange()" id="naz" name="naz"
                                type="text" maxlength="20" size="30" />
                        </td>
                        <td class="error">Wpisz poprawne Nazwisko!</td>
                    </tr>
                    <tr>
                        <td><label for="wiek">Wiek: </label></td>
                        <td>
                            <input class="form-control" onchange="onFormElementChange()" id="wiek" name="wiek"
                                type="number" min="1" max="150" />
                        </td>
                        <td class="error">Wpisz poprawny wiek!</td>
                    </tr>
                    <tr>
                        <td>Państwo:</td>
                        <td>
                            <select class="form-control" id="panstwo" name="panstwo">
                                <option value="p">Polska</option>
                                <option value="n">Germany</option>
                                <option value="i">Italy</option>
                            </select>
                        </td>
                        <td class="error">Wybierz swoje państwo!</td>
                    </tr>
                    <tr>
                        <td>Telefon:</td>
                        <td>
                            <input class="form-control" onchange="onFormElementChange()" type="number" name="telefon"
                                id="telefon" />
                        </td>
                        <td class="error">Wpisz poprawny numer telefonu!</td>
                    </tr>
                    <tr>
                        <td><label for="email">Adres kontaktowy e-mail: </label></td>
                        <td>
                            <input class="form-control" onchange="onFormElementChange()" id="email" type="email"
                                name="email" maxlength="30" size="30" placeholder="michalmazur@pollub.edu.pl" />
                        </td>
                        <td class="error">Wpisz poprawny email!</td>
                    </tr>
                </table>

                <h4>Wyjaśnij nam o co dokładniej chodzi...</h4>
                <textarea class="form-control" onchange="onFormElementChange()" id="uwagi" name="uwagi" cols="70"
                    rows="5"></textarea>
                <h4>Wybierz swoje zainteresowania dla celów statystycznych...</h4>
                <div class="zainteresowania">
                    <div class="zaintereElement">
                        <input class="form-check-input" type="checkbox" id="zainteresowanie1" name="zainteresowania[]"
                            value="Programowanie" />
                        <label class="form-check-label" for="zainteresowanie1">Programowanie</label><br />
                    </div>
                    <div class="zaintereElement">
                        <input class="form-check-input" type="checkbox" id="zainteresowanie2" name="zainteresowania[]"
                            value="Sport" />
                        <label class="form-check-label" for="zainteresowanie2">Sport</label><br />
                    </div>
                    <div class="zaintereElement">
                        <input class="form-check-input" type="checkbox" id="zainteresowanie3" name="zainteresowania[]"
                            value="Muzyka" />
                        <label class="form-check-label" for="zainteresowanie3">Muzyka</label><br />
                    </div>
                    <div class="zaintereElement">
                        <input class="form-check-input" type="checkbox" id="zainteresowanie4" name="zainteresowania[]"
                            value="Sztuka" />
                        <label class="form-check-label" for="zainteresowanie4">Sztuka</label><br />
                    </div>
                    <div class="zaintereElement">
                        <input class="form-check-input" type="checkbox" id="zainteresowanie5" name="zainteresowania[]"
                            value="Podróże" />
                        <label class="form-check-label" for="zainteresowanie5">Podróże</label><br />
                    </div>
                    <div class="zaintereElement">
                        <input class="form-check-input" type="checkbox" id="zainteresowanie6" name="zainteresowania[]"
                            value="Gotowanie" />
                        <label class="form-check-label" for="zainteresowanie6">Gotowanie</label><br />
                    </div>
                    <div class="zaintereElement">
                        <input class="form-check-input" type="checkbox" id="zainteresowanie7" name="zainteresowania[]"
                            value="Języki obce" />
                        <label class="form-check-label" for="zainteresowanie7">Języki obce</label><br />
                    </div>
                    <div class="zaintereElement">
                        <input class="form-check-input" type="checkbox" id="zainteresowanie8" name="zainteresowania[]"
                            value="Fotografia" />
                        <label class="form-check-label" for="zainteresowanie8">Fotografia</label><br />
                    </div>
                    <div class="zaintereElement">
                        <input class="form-check-input" type="checkbox" id="zainteresowanie9" name="zainteresowania[]"
                            value="Film" />
                        <label class="form-check-label" for="zainteresowanie9">Film</label><br />
                    </div>
                    <div class="zaintereElement">
                        <input class="form-check-input" type="checkbox" id="zainteresowanie10" name="zainteresowania[]"
                            value="Książki" />
                        <label class="form-check-label" for="zainteresowanie10">Książki</label><br />
                    </div>
                    <div class="zaintereElement">
                        <input class="form-check-input" type="checkbox" id="zainteresowanie11" name="zainteresowania[]"
                            value="Motoryzacja" />
                        <label class="form-check-label" for="zainteresowanie11">Motoryzacja</label><br />
                    </div>
                    <div class="zaintereElement">
                        <input class="form-check-input" type="checkbox" id="zainteresowanie12" name="zainteresowania[]"
                            value="Historia" />
                        <label class="form-check-label" for="zainteresowanie12">Historia</label><br />
                    </div>
                    <div class="zaintereElement">
                        <input class="form-check-input" type="checkbox" id="zainteresowanie13" name="zainteresowania[]"
                            value="Moda" />
                        <label class="form-check-label" for="zainteresowanie13">Moda</label><br />
                    </div>
                    <div class="zaintereElement">
                        <input class="form-check-input" type="checkbox" id="zainteresowanie14" name="zainteresowania[]"
                            value="Innowacje
                        technologiczne" />
                        <label class="form-check-label" for="zainteresowanie14">Innowacje</label><br />
                    </div>
                    <div class="zaintereElement">
                        <input class="form-check-input" type="checkbox" id="zainteresowanie15" name="zainteresowania[]"
                            value="Nauka" />
                        <label class="form-check-label" for="zainteresowanie15">Nauka</label><br />
                    </div>
                    <div class="zaintereElement">
                        <input class="form-check-input" type="checkbox" id="zainteresowanie17" name="zainteresowania[]"
                            value="Gry komputerowe" />
                        <label class="form-check-label" for="zainteresowanie17">Gry</label><br />
                    </div>
                    <div class="zaintereElement">
                        <input class="form-check-input" type="checkbox" id="zainteresowanie18" name="zainteresowania[]"
                            value="Design" />
                        <label class="form-check-label" for="zainteresowanie18">Design</label><br />
                    </div>
                    <div class="zaintereElement">
                        <input class="form-check-input" type="checkbox" id="zainteresowanie19" name="zainteresowania[]"
                            value="Polityka" />
                        <label class="form-check-label" for="zainteresowanie19">Polityka</label><br />
                    </div>
                    <div class="zaintereElement">
                        <input class="form-check-input" type="checkbox" id="zainteresowanie20" name="zainteresowania[]"
                            value="Zwierzęta" />
                        <label class="form-check-label" for="zainteresowanie20">Zwierzęta</label><br />
                    </div>

                    <div class="zaintereElement">
                        <input class="form-check-input" type="checkbox" id="zainteresowanie21" name="zainteresowania[]"
                            value="Zwierzęta" />
                        <label class="form-check-label" for="zainteresowanie21">Komputery</label><br />
                    </div>
                </div>

                <br />

                <div class="buttonsForm">
                    <button class="btn btn-outline-primary" type="submit" name="submit" value="submit">Wyślij</button>
                    <button class="btn btn-outline-danger" type="reset">Wyczyść</button>
                </div>
            </form>

            <!-- Poniższe przyciski automatycznie pojawiają się -->
            <div class="buttonsForm">
                <button class="btn btn-success" type="button" id="btnLoad" onclick="loadFromLocalStorage()">
                    Dostępna wersja robocza. Załadować?
                </button>
                <button class="btn btn-primary" type="button" id="btnSave" onclick="saveToLocalStorage()">
                    Zapisz wersje roboczą
                </button>
                <button class="btn btn-danger" type="button" id="btnClear" onclick="clearFromLocalStorage()">
                    Usuń wersje roboczą
                </button>
            </div>

            @auth
            <br><br>
            <h3>Wszystkie zgłoszenia:</h3>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Imie</th>
                            <th>Nazwisko</th>
                            <th>Wiek</th>
                            <th>Panstwo</th>
                            <th>Telefon</th>
                            <th>Email</th>
                            <th>Uwagi</th>
                            <th>Zainteresowania</th>
                            <th>Wysłano o</th>
                            <th>Usuń</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->imie }}</td>
                                <td>{{ $contact->naz }}</td>
                                <td>{{ $contact->wiek }}</td>
                                <td>{{ $contact->panstwo }}</td>
                                <td>{{ $contact->telefon }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->uwagi }}</td>
                                <td>{{ $contact->zainteresowania }}</td>
                                <td>{{ $contact->created_at }}</td>
                                <td><a href="{{ route('contact.delete', $contact->id) }}" class="btn btn-danger btn-xs" style="height: 44px;"title="Skasuj">Usuń</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            @endauth
        </div>
    </div>
@endsection

@section('styles')
    @parent
    <style>
        /* SEKCJA KONTAKTU */

        /* Styl dla inputów i selectów w tabeli kontaktowej */
        .contact td input,
        .contact td select {
            width: 100%;
        }

        /* Styl dla sekcji kontaktowej */
        .contact {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        /* Styl dla formularza kontaktowego */
        .contact form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            border: 1px solid black;
            border-radius: 10px;
            padding: 5px;
            margin: 0 0 20px 0;
        }

        /* Styl dla wierszy i komórek tabeli */
        tr,
        td {
            transition: all 1s;
        }

        /* Styl dla komunikatu o błędzie */
        .error {
            display: none;
            color: red;
        }

        /* SEKCJA ZAINTERESOWAŃ */

        /* Styl dla sekcji zainteresowań */
        .zainteresowania {
            display: flex;
            justify-content: center;
            justify-items: baseline;
            flex-wrap: wrap;
        }

        /* Styl dla elementu zainteresowania */
        .zaintereElement {
            width: 200px;
            display: flex;
            justify-content: left;
        }

        /* Styl dla etykiety w elemencie zainteresowania */
        .zaintereElement>label {
            margin-left: 10px;
        }

        /* Styl dla sekcji krótkich informacji */
        .shortInfo {
            width: 100%;
            margin-bottom: 50px;
        }

        /* Styl dla formularza przycisków */
        .buttonsForm {
            display: flex;
        }

        /* Styl dla przycisków w formularzu */
        .buttonsForm>button {
            margin: 7px;
        }

        /* MEDIA QUERY */

        /* Media query dla szerokości ekranu poniżej 992px */
        @media only screen and (max-width: 992px) {

            /* Zmiana układu formularza przycisków na kolumnowy */
            .buttonsForm {
                flex-direction: column;
            }

            /* Zmiana szerokości elementu zainteresowania */
            .zaintereElement {
                width: 180px;
            }

            /* Zmiana układu elementów w fieldsecie formularza */
            .contact form>fieldset {
                flex-direction: column;
            }
        }

        .showSuccess {
            display: block;
        }
    </style>
@endsection



@section('scripts')
    @parent
    <script>
        // lab 8 pdf - walidacja formularzy przez js
        function getPoleIf(pole_id, obiektRegex) {
            //Funkcja sprawdza czy wartość wprowadzona do pola tekstowego
            //pasuje do wzorca zdefiniowanego za pomocą wyrażenia regularnego
            //Parametry funkcji:
            //pole_id - id sprawdzanego pola tekstowego
            //obiektRegex - wyrażenie regularne
            //---------------------------------
            var obiektPole = document.getElementById(pole_id); // odnajduje dany element z formularza
            if (!obiektRegex.test(obiektPole.value))
                // uruchamia test regexa
                return undefined; // jesli wzorzec nie pasuje wtedy zwraca undefined
            else return obiektPole.value; // w przeciwnym wypadku zwraca wartosc danego pola
        }

        // Funkcja pobierająca zaznaczone pola typu checkbox
        function getChekboxes(input_type) {
            inputs = []; // Tablica przechowująca wartości zaznaczonych pól
            var inputElements = document.getElementsByName(
                input_type); // Pobierz elementy o nazwie zgodnej z parametrem input_type

            // Przeiteruj przez wszystkie elementy
            for (var i = 0; i < inputElements.length; ++i) {
                // Sprawdź, czy dany element jest zaznaczony
                if (inputElements[i].checked) {
                    // Jeżeli jest zaznaczony, dodaj jego wartość do tablicy inputs
                    inputs.push(inputElements[i].value);
                }
            }

            // Sprawdź, czy tablica inputs jest pusta
            if (inputs.length == 0) {
                // Jeżeli jest pusta, zwróć wartość undefined
                return undefined;
            } else {
                // W przeciwnym razie, zwróć tablicę inputs
                return inputs;
            }
        }

        // Funkcja pobierająca zaznaczone pola typu radio
        function getRadio(radio_tapok) {
            var radios = document.getElementsByName(radio_tapok);
            for (var i = 0; i < radios.length; i++) {
                if (radios[i].checked) {
                    return radios[i].value;
                }
            }
            return undefined;
        }

        function checkForm() {
            // wzorce regularne dla poszczególnych pól formularza
            obiektNazw = /^[\p{L}]{2,20}$/u;
            obiektemail = /^([a-zA-Z0-9])+([.a-zA-Z0-9_-])*@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-]+)+/;
            obiektWiek = /^[1-9][0-9]{1,2}$/;
            obiektNumer = /^[0-9]{9}$/;

            // pobranie wartości pól formularza
            imie = getPoleIf("imie", obiektNazw);
            nazw = getPoleIf("naz", obiektNazw);
            wiek = getPoleIf("wiek", obiektWiek);
            panstwo = document.getElementById("panstwo").value;
            telefon = getPoleIf("telefon", obiektNumer);
            email = getPoleIf("email", obiektemail);
            uwagi = document.getElementById("uwagi").value;
            zainteresowania = getChekboxes("zainteresowania[]");

            // utworzenie tablicy z wartościami pól formularza
            pola = [imie, nazw, wiek, panstwo, telefon, email];

            anyError = false;

            // iteracja po polach formularza i weryfikacja poprawności ich wartości
            for (i = 0; i < pola.length; i++) {
                if (pola[i] == undefined) {
                    // jeśli wartość pola jest niepoprawna, wyświetl komunikat o błędzie
                    document.getElementsByClassName("error")[i].style.display = "block";
                    anyError = true;
                } else {
                    // w przeciwnym razie ukryj komunikat o błędzie
                    document.getElementsByClassName("error")[i].style.display = "none";
                }
            }

            return anyError;
        }

        function submitForm(thisForm) {
            // jeśli nie ma żadnych błędów, wyświetl potwierdzenie danych z formularza
            anyError = checkForm();

            if (anyError == false) {
                // wyświetl okno dialogowe z potwierdzeniem danych z formularza

                //const formattedFormData = new FormData(thisForm);
                //formattedFormData.append("submit", "submit");
                //  await fetch('handle_form.php',{
                //     method: 'POST',
                //     body: formattedFormData
                // });

                // fetch("./klasy/ReportsManager.php", {
                //         method: "POST",
                //         // headers: {"Content-type": "application/x-www-form-urlencoded; charset=UTF-8"},
                //         body: formattedFormData,
                //     })
                //     .then((response) => response.text())
                //     .then((datas) => {
                //         // pobrana podstrona zostanie wstrzyknięta do głównego kontenera przechowującego stronę
                //         //pageContainer.innerHTML = datas;
                //         console.log(datas);
                //     });

                return true;
            } else {
                return false;
            }
        }

        // funkcja jest podpięta pod zdarzenie onchange do pól formularzy żeby na bieżąco sprawdzać zmiany
        function onFormElementChange() {
            checkForm();
        }

        // sprawdza czy jest zapisana jakakolwiek wersja robocza
        function checkAvailableState() {
            btnLoad = document.getElementById("btnLoad"); // Pobierz referencję do przycisku o id "btnLoad"
            btnSave = document.getElementById("btnSave"); // Pobierz referencję do przycisku o id "btnSave"
            btnClear = document.getElementById("btnClear"); // Pobierz referencję do przycisku o id "btnClear"

            if (localStorage.getItem("wersjaRobocza") === null) {
                // Jeżeli element "wersjaRobocza" nie istnieje w localStorage
                btnLoad.style = "display: none;"; // Ukryj przycisk "btnLoad"
                btnClear.style = "display: none;"; // Ukryj przycisk "btnClear"
            } else {
                // W przeciwnym razie (element "wersjaRobocza" istnieje w localStorage)
                btnLoad.style = "display: block;"; // Wyświetl przycisk "btnLoad"
                btnClear.style = "display: block;"; // Wyświetl przycisk "btnClear"
            }
        }

        // wykonywana wtedy gdy nastąpi odczyt z pamięci przeglądarki żeby sprawdzić czy dane są poprawne(walidacja formularza przez JS)
        function onDataRead() {
            checkForm();
        }


        // Funkcja wczytująca dane z Local Storage
        function loadFromLocalStorage() {
            var dane = JSON.parse(localStorage.getItem("wersjaRobocza"));
            var type = document.getElementsByName("reportType");

            // przejrzenie elementów o nazwie reportType i przypisanie id zaznaczonego radiobuttona do obiektu
            type.forEach((element) => {
                if (element.id == dane.powod) {
                    element.checked = true;
                }
            });

            // przypisanie elementom z formularza odpowiednich wartości
            document.getElementById("imie").value = dane.imie;
            document.getElementById("naz").value = dane.naz;
            document.getElementById("wiek").value = dane.wiek;
            document.getElementById("panstwo").value = dane.panstwo;
            document.getElementById("telefon").value = dane.telefon;
            document.getElementById("email").value = dane.email;
            document.getElementById("uwagi").value = dane.uwagi;

            var checkBoxes = document.getElementsByName("zainteresowania[]");

            // Zaznaczenie odpowiednich checkboxów na podstawie danych z Local Storage
            checkBoxes.forEach((element) => {
                if (dane.zainteresowania.includes(element.value)) element.checked = true;
            });

            checkAvailableState();
            onDataRead(); // funkcja z pliku main.js
        }

        // Funkcja zapisująca dane do Local Storage
        function saveToLocalStorage() {
            var dane = {};

            var type = document.getElementsByName("reportType");

            // przejrzenie elementów o nazwie reportType i przypisanie id zaznaczonego radiobuttona do obiektu
            type.forEach((element) => {
                if (element.checked) {
                    dane.powod = element.id;
                }
            });

            // Przypisanie wartości pól formularza do obiektu dane
            dane.imie = document.getElementById("imie").value;
            dane.naz = document.getElementById("naz").value;
            dane.wiek = parseInt(document.getElementById("wiek").value);
            dane.panstwo = document.getElementById("panstwo").value;
            dane.telefon = document.getElementById("telefon").value;
            dane.email = document.getElementById("email").value;
            dane.uwagi = document.getElementById("uwagi").value;
            dane.zainteresowania = getChekboxes("zainteresowania[]");

            if (isNaN(dane.telefon)) {
                dane.telefon = 123456789;
            }

            // Zapisanie obiektu dane do Local Storage w formacie JSON
            localStorage.setItem("wersjaRobocza", JSON.stringify(dane));
            console.log(dane);
            alert("Zapisano wersję roboczą");

            checkAvailableState();
        }

        // Funkcja usuwająca dane z Local Storage
        function clearFromLocalStorage() {
            localStorage.removeItem("wersjaRobocza");

            checkAvailableState();
        }


        document.addEventListener("DOMContentLoaded", () => {
            checkAvailableState();
        });
    </script>
@endsection
