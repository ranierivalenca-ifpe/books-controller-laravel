<form method="POST" action="{{ route('create_book') }}" class="m-3 p-3 border border-black rounded-lg">
    @csrf

    <x-input id="name" class="block mt-1 w-full" type="name" name="name" placeholder="Book name" />

    <x-input id="author" class="block mt-1 w-full" type="author" name="author" placeholder="Book author" />

    <x-input id="year" class="block mt-1 w-full" type="year" name="year" placeholder="Book year" />

    <select name="genre" id="genre">
        @foreach (\App\Models\Genre::all() as $genre)
            <option value="{{ $genre->id }}">{{ $genre->genre }}</option>
        @endforeach
    </select>

    <x-button>Salvar</x-button>
</form>