<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- NAVBAR -->
    <nav class="bg-red-600 text-white p-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">🍕 Pizzaria</h1>

        <div class="space-x-4">
            <a href="/" class="hover:underline">Home</a>
            <a href="/pizzas" class="hover:underline">Menu</a>
            <a href="/contact" class="hover:underline">Contact</a>

            @auth
                <a href="/dashboard" class="ml-4 bg-white text-red-600 px-3 py-1 rounded">
                    Dashboard
                </a>
            @else
                <a href="/login" class="ml-4 bg-white text-red-600 px-3 py-1 rounded">
                    Login
                </a>
            @endauth
        </div>
    </nav>

    <!-- HERO -->
    <section class="bg-white text-center py-20">
        <h2 class="text-4xl font-bold mb-4">
            Welkom bij onze Pizzaria 🍕
        </h2>

        <p class="mb-6 text-lg">
            De lekkerste pizza's, vers uit de oven!
        </p>

        <a href="/pizzas" class="bg-red-600 text-white px-6 py-3 rounded text-lg">
            Bekijk menu
        </a>
    </section>

    <!-- POPULAIRE PIZZA'S -->
    <section class="p-10 max-w-6xl mx-auto">
        <h3 class="text-2xl font-bold mb-6">
            Populaire pizza's
        </h3>

        <div class="grid md:grid-cols-3 gap-6">

            <!-- Pizza card -->
            <div class="bg-white p-4 rounded shadow">
                <h4 class="text-lg font-bold">Margherita</h4>
                <p class="text-gray-600">Tomaat, mozzarella, basilicum</p>
                <p class="mt-2 font-bold">€8,50</p>
            </div>

            <!-- Pizza card -->
            <div class="bg-white p-4 rounded shadow">
                <h4 class="text-lg font-bold">Pepperoni</h4>
                <p class="text-gray-600">Pittige worst, kaas</p>
                <p class="mt-2 font-bold">€9,50</p>
            </div>

            <!-- Pizza card -->
            <div class="bg-white p-4 rounded shadow">
                <h4 class="text-lg font-bold">Hawaii</h4>
                <p class="text-gray-600">Ham, ananas</p>
                <p class="mt-2 font-bold">€10,00</p>
            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-gray-800 text-white text-center p-4 mt-10">
        © {{ date('Y') }} Pizzaria - Alle rechten voorbehouden
    </footer>

</body>
</html>