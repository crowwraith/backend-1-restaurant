<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Pizza aanpassen</title>
</head>
<body>
<h1>Pizza aanpassen</h1>
<form method="POST" action="/pizzas/{{ $pizza->id }}">
    @csrf
    @method('PUT')

    <div>
        <label>Naam</label><br>
        <input type="text" name="name" value="{{ $pizza->name }}" required>
    </div>
    <br>
    <div>
        <label>Beschrijving</label><br>
        <textarea name="description" required>{{ $pizza->description }}</textarea>
    </div>
    <br>
    <div>
        <label>Prijs</label><br>
        <input type="number" step="0.01" name="price" value="{{ $pizza->price }}" required>
    </div>
    <br>
    <button type="submit">Opslaan</button>
</form>
<br>
<a href="/pizzas">← Terug naar menu</a>
</body>
</html>