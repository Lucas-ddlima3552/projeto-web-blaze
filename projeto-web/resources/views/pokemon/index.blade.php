@foreach($pokemon as $bichinho)
    <div>
        <h3>{{ $bichinho->nome }}</h3>
        <p>{{ $bichinho->tipo }}</p>
        <p>{{ $bichinho->pontos_de_poder }}</p>
        <a href="{{ url('pokemon/'.$bichinho->id.'/edit') }}">Edit</a>
        <form action="{{ url('pokemon/'.$bichinho->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach