<h1>Contact</h1>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif
   <nav class="bg-red-600 text-white p-4 flex justify-between items-center">
        <h1 class="font-bold text-xl">🍕 Pizzaria</h1>

        <div>
            <a href="/" class="mr-4 hover:underline">Home</a>
            <a href="/pizzas" class="mr-4 font-bold underline">Menu</a>
            <a href="/contact" class="hover:underline">Contact</a>
        </div>
    </nav>
<form method="POST" action="/contact">
    @csrf

    <input type="text" name="name" placeholder="Naam">
    <input type="email" name="email" placeholder="Email">

    <textarea name="message" placeholder="Bericht"></textarea>

    <button type="submit">Versturen</button>
</form>