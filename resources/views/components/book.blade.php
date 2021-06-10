@props(['book'])

<div class="px-6 py-3 rounded shadow-md relative">
    <div class="absolute top-1 right-1 bg-red-200 rounded-full w-5 h-5 flex items-center justify-center hover:bg-red-400 cursor-pointer">
        <a href="{{ route('remove_book', $book) }}">&times;</a>
    </div>
    <h3 class="border-b mb-1">
        {{ $book->name }}
        <span class="text-sm text-gray-400">({{ $book->author }})</span>
    </h3>
    <div class="text-center">
        <a class="text-blue-600" href="/{{ $book->genre->id }}">{{ $book->genre->genre }}</a>
    </div>
</div>