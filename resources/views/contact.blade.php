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
            <h2>Formularz zgłoszenia</h2>
            <form method="post" onsubmit="event.preventDefault();
            return submitForm(this);">
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

            <form action="mailto:s97677@pollub.edu.pl" method="post">
                <fieldset style="display: flex; justify-content: space-between; width: 100%">
                    <legend>Jaka ocena szefie?</legend>
                    <div class="form-check">
                        <input class="form-check-input" id="gwiazdki5" type="radio" name="gwiazdki" required
                            onchange="saveToSessionStorage()" />
                        <label class="form-check-label" for="fix">5 gwiazdek</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="gwiazdki4" type="radio" name="gwiazdki" required
                            onchange="saveToSessionStorage()" />
                        <label class="form-check-label" for="fix">4 gwiazdki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="gwiazdki3" type="radio" name="gwiazdki" required
                            onchange="saveToSessionStorage()" />
                        <label class="form-check-label" for="fix">3 gwiazdki</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" id="gwiazdki2" type="radio" name="gwiazdki" required
                            onchange="saveToSessionStorage()" />
                        <label class="form-check-label" for="fix">2 gwiazdki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="gwiazdki1" type="radio" name="gwiazdki" required
                            onchange="saveToSessionStorage()" />
                        <label class="form-check-label" for="fix">1 gwiazdka</label>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>
                        Napisz co o nas sądzisz? (nie można używać liczb! Wymagane 10-50
                        znaków)
                    </legend>
                    <input type="text" class="form-control" title="Wymagane 10-50 znaków!" pattern="^.{10,50}$"
                        required placeholder="Tutaj wpisz tekst" id="uwagiDoPoprawy" name="uwagiDoPoprawy"
                        onchange="saveToSessionStorage()" />
                </fieldset>

                <div class="buttonsForm">
                    <button class="btn btn-outline-primary" type="submit">Wyślij</button>
                </div>
            </form>

            <div class="buttonsForm">
                <button class="btn btn-success" type="button" disabled>
                    Zapisywanie automatyczne w SessionStorage
                </button>
                <button class="btn btn-danger" type="button" id="btnClear" onclick="clearFromSessionStorage()">
                    Usuń sessionStorage
                </button>
            </div>
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
    </style>
@endsection
