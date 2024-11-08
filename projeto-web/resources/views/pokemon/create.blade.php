<form action="{{ url('pokemon') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Name" required>
    <input type="text" name="tipo" placeholder="Tipo" required></input>
    <input type="number" name="pontos_de_poder" placeholder="Pontos de Poder" required></input>
    <button type="submit">Create Pokémon</button>
</form>