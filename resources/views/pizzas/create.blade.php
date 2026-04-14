<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Pizza toevoegen</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <div class="max-w-xl mx-auto p-10">

        <h1 class="text-2xl font-bold mb-6">🍕 Pizza toevoegen</h1>

        <form method="POST" action="/pizzas" class="bg-white p-6 rounded shadow">
            @csrf

            <div class="mb-4">
                <label class="block mb-1">Naam</label>
                <input type="text" name="name" class="w-full border p-2">
            </div>

            <div class="mb-4">
                <label class="block mb-1">Omschrijving</label>
                <textarea name="description" class="w-full border p-2"></textarea>
            </div>

            <div class="mb-4">
                <label class="block mb-1">Prijs</label>
                <input type="number" step="0.01" name="price" class="w-full border p-2">
            </div>

            <button class="bg-red-600 text-white px-4 py-2 rounded">
                Opslaan
            </button>
        </form>

        <a href="/pizzas" class="block mt-4 text-blue-500">
            ← Terug naar menu
        </a>

    </div>

</body>
</html>