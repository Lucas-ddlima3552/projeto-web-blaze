<form action="{{ url(path: 'pokemon/' . $pokemon->id) }}"
method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" placeholder="Name" value="{{ $pokemon->nome }}" required>
    <input type="text" name="tipo" placeholder="Kind" value="{{ $pokemon->tipo }}" required>
    <input type="number" name="pontos_de_poder" placeholder="Power Points" value="{{ $pokemon->pontos_de_poder }}" required>

    <button type="submit">Update Pokemon</button>
</form>