<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Chegou, né miséra?
                </div>
                @foreach (Auth::user()->books as $book)
                    <div class="px-6 py-3">
                        {{ $book->name }} ({{ $book->author }}) / <a href="/{{ $book->genre->id }}">{{ $book->genre->genre }}</a>
                    </div>
                @endforeach
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
            </div>
        </div>
    </div>
</x-app-layout>
