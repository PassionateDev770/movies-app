<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="container mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
                @if($movie)
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-4 p-4">{{ $movie['title'] }}</h2>
                    <p class="text-gray-700 mb-4 p-4"><strong>Overview:</strong> {{ $movie['overview'] }}</p>
                    <p class="text-gray-700 mb-2 p-2"><strong>Release Date:</strong> {{ $movie['release_date'] }}</p>
                    <p class="text-gray-700 mb-2 p-2"><strong>Rating:</strong> {{ $movie['vote_average'] }}</p>
                    <p class="text-gray-700 mb-2 p-2"><strong>vote_count:</strong> {{ $movie['vote_count'] }}</p>
                    <p class="text-gray-700 mb-2 p-2"><strong>adult:</strong> {{ $movie['adult'] }}</p>
                    <p class="text-gray-700 mb-2 p-2"><strong>backdrop_path:</strong> {{ $movie['backdrop_path'] }}</p>
                    <p class="text-gray-700 mb-2 p-2"><strong>budget:</strong> {{ $movie['budget'] }}</p>
                    <p class="text-gray-700 mb-2 p-2"><strong>homepage:</strong> {{ $movie['homepage'] }}</p>
                    <p class="text-gray-700 mb-2 p-2"><strong>id:</strong> {{ $movie['id'] }}</p>
                    <p class="text-gray-700 mb-2 p-2"><strong>imdb_id:</strong> {{ $movie['imdb_id'] }}</p>
                    <p class="text-gray-700 mb-2 p-2"><strong>popularity:</strong> {{ $movie['popularity'] }}</p>
                    <p class="text-gray-700 mb-2 p-2"><strong>poster_path:</strong> {{ $movie['poster_path'] }}</p>
                    <p class="text-gray-700 mb-2 p-2"><strong>revenue:</strong> {{ $movie['revenue'] }}</p>
                    <p class="text-gray-700 mb-2 p-2"><strong>runtime:</strong> {{ $movie['runtime'] }}</p>
                    <p class="text-gray-700 mb-2 p-2"><strong>status:</strong> {{ $movie['status'] }}</p>
                    <p class="text-gray-700 mb-2 p-2"><strong>tagline:</strong> {{ $movie['tagline'] }}</p>
                    <p class="text-gray-700 mb-2 p-2"><strong>video:</strong> {{ $movie['video'] }}</p>
                    <p class="text-gray-700 mb-2 p-2"><strong>vote_average:</strong> {{ $movie['vote_average'] }}</p>
                    <p class="text-gray-700 mb-2 p-2"><strong>vote_count:</strong> {{ $movie['vote_count'] }}</p>
                @else
                    <p>Movie not found.</p>
                @endif
            </div>
        </div>
    </div>
</div>
