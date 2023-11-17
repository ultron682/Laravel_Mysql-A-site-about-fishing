@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="faq">
            <h2>Polecane narzędzia</h2>
            @guest
                <div class="table-container">
                    <b>Zaloguj się aby edytować dostępne narzędzia</b>
                </div>
            @endguest
            <!-- Page Heading -->
            @auth
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <a href="{{ route('tools.create') }}" class="btn btn-success btn-xs" style="height: 44px;"
                        title="Dodaj nowe narzędzie">Dodaj nowe narzędzie</a>
                    </div>
                </header>
            @endauth
            <div class="card-group" id="eleContainer">
                <!-- W tym miejscu za pomocą funckji loadTools() zostaną wygenerowane dynamicznie karty polecanych narzędzi-->
                <!-- karty mają gotowe style z bootstrapa -->
                @foreach ($tools as $tool)
                    <a data-lightbox="Galeria" data-title="{{ $tool->name }}" href="{{ Storage::disk('toolsImgs')->url($tool->src) }}" class="card"
                        style="min-width: 18rem;">
                        <img src="{{ Storage::disk('toolsImgs')->url($tool->src) }}" alt="{{ $tool->name }}" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">{{ $tool->name }}</h4>
                        </div>
                        @auth
                            <a href="{{ route('tools.edit', $tool) }}" class="btn btn-success btn-xs" style="height: 44px;"
                                title="Edytuj">Edytuj</a>
                            <a href="{{ route('tools.delete', $tool->id) }}" class="btn btn-danger btn-xs" style="height: 44px;"
                                onclick="return confirm('Jesteś pewien?')" title="Skasuj">Usuń</a>
                        @endauth
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('styles')
    @parent
    <style>
        /* Stylowanie elementu o klasie "card" */
        .card {
            cursor: pointer;
            /* Kursor zmienia się na wskaźnik po najechaniu na element */
            transition: 0.3s transform cubic-bezier(0.155, 1.105, 0.295, 1.12), 0.3s box-shadow, 0.3s;
            /* Płynne przejście dla transformacji, cienia i innych właściwości w czasie 0.3 sekundy */
        }

        /* Efekt po najechaniu na element o klasie "card" */
        .card:hover {
            transform: scale(1.05);
            /* Powiększenie elementu o 5% */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.12), 0 4px 8px rgba(0, 0, 0, 0.06);
            /* Dodanie cienia */
            z-index: 10;
            /* Ustawienie wyższej wartości z-indeksu, aby element był nad innymi elementami */
        }

        /* Stylowanie nagłówka h4 wewnątrz elementu o klasie "card" */
        .card h4 {
            color: black;
            /* Kolor tekstu ustawiony na czarny */
            text-align: center;
            /* Wyśrodkowanie tekstu */
        }

        /* Stylowanie obrazka wewnątrz elementu o klasie "card" */
        .card img {
            object-fit: scale-down;
            /* Dopasowanie obrazka, zachowując proporcje, do rozmiaru kontenera */
        }

        /* Pozbycie się domyślnych styli dla tagu "a" w kontenerze o identyfikatorze "eleContainer" */
        #eleContainer>a:link {
            text-decoration: none;
            /* Usunięcie podkreślenia dla nieodwiedzonych linków */
        }

        /* Pozbycie się domyślnych styli dla tagu "a" */
        a:link,
        a:visited,
        a:hover,
        a:active {
            text-decoration: none;
            /* Usunięcie podkreślenia dla linków w różnych stanach */
        }
    </style>
@endsection
