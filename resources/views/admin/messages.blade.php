<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Berichten</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <!-- NAV -->
    <nav class="bg-red-600 text-white p-4 flex justify-between">
        <h1 class="font-bold">Admin - Berichten</h1>

        <a href="/dashboard" class="bg-white text-red-600 px-3 py-1 rounded">
            Dashboard
        </a>
    </nav>

    <div class="p-10 max-w-6xl mx-auto">

        <h2 class="text-3xl font-bold mb-6">Contact berichten</h2>

        @foreach($messages as $message)
            <div class="bg-white p-4 mb-4 rounded shadow">

                <p><strong>Naam:</strong> {{ $message->name }}</p>
                <p><strong>Email:</strong> {{ $message->email }}</p>

                <p class="mt-2">
                    {{ $message->message }}
                </p>

                <p class="text-sm text-gray-500 mt-2">
                    {{ $message->created_at }}
                </p>

            </div>
        @endforeach

    </div>

</body>
</html>