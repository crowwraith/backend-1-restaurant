<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <!-- NAVBAR -->
    <nav class="bg-red-600 text-white p-4 flex justify-between items-center">
        <h1 class="font-bold text-xl">🍕 Pizzaria</h1>

        <div>
            <a href="/" class="mr-4 hover:underline">Home</a>
            <a href="/pizzas" class="mr-4 font-bold underline">Menu</a>
            <a href="/contact" class="hover:underline">Contact</a>
        </div>
    </nav>

    <!-- CONTENT -->
    <div class="p-10 max-w-6xl mx-auto">

        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold">Ons Menu</h2>

            <!-- alleen ingelogde users zien create knop -->
            @auth
                <a href="/pizzas/create"
                   class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
                    + Pizza toevoegen
                </a>
            @endauth
        </div>

        <!-- GRID -->
        <div class="grid md:grid-cols-3 gap-6">

            @foreach($pizzas as $pizza)
                <div class="bg-white p-5 rounded shadow">

                    <h3 class="text-xl font-bold mb-2">
                        {{ $pizza->name }}
                    </h3>

                    <p class="text-gray-600 mb-3">
                        {{ $pizza->description }}
                    </p>

                    <p class="font-bold text-lg mb-4">
                        €{{ $pizza->price }}
                    </p>
                </div>
            @endforeach

        </div>

    </div>

</body>
</html>