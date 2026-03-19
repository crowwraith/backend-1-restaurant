<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/Style.css') }}"/>
</head>
<body>

<header class="mobile-header">
    <a href="{{ url('/') }}" class="logo">Logo</a>

    <nav class="nav-buttons">
        <a href="{{ url('/ons') }}">Over ons</a>
        <a href="{{ url('/reizen') }}">Reizen</a>
        <a href="{{ url('/contact') }}">Service & Contact</a>

        @if(session('username'))
            <a href="{{ url('/mijninfo') }}">Mijn account</a>
        @endif

        @if(session('role') === 'admin')
            <a href="{{ url('/admin') }}">Admin Panel</a>
        @endif

        @if(session('username'))
            <a href="{{ url('/logout') }}">
                Uitloggen ({{ session('username') }})
            </a>
        @else
            <a href="{{ url('/login') }}">Login</a>
        @endif
    </nav>
</header>

<div class="achtergrond-container">
    <img src="{{ asset('assets/img/achtergrond.png') }}" alt="Achtergrond afbeelding" class="achtergrond" />

    <form class="zoek-form" method="GET" action="{{ url('/zoeken') }}">
        <label>
            Vertrekdatum
            <input type="date" name="vertrekdatum" required />
        </label>

        <label>
            Reistduur (dagen)
            <input type="number" name="reistduur" min="1" required />
        </label>

        <label>
            Aantal reizigers
            <select name="reizigers" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </label>

        <button type="submit">Zoeken</button>
    </form>
</div>

<section class="foto-en-balkjes-container">
    <div class="balkjes-container">
        <div class="balk">Reizen boeken</div>
        <div class="balk">Scherp geprijsde vakanties</div>
        <div class="balk">Stedentrips</div>
        <div class="balk">Wintersport</div>
        <div class="balk">Autovakanties</div>
        <div class="balk">Verre reizen</div>
        <div class="balk">Rondreizen</div>
        <div class="balk">Groups & incentives</div>
        <div class="balk">Wekelijkse deals</div>
    </div>
</section>

<footer>
    <nav>
        <a href="{{ url('/') }}" class="Home">Home</a>
        <a href="{{ url('/contact') }}">Service & Contact</a>
        <a href="{{ url('/policy') }}">Policy</a>
    </nav>